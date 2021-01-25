<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean',
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            $userCheck = (new User())->findForPassport($request->input('email') ?? $request->input('username'));

            if ($userCheck && $userCheck->login_attempts >= 3 && $userCheck->status == 0) {
                return response([
                    'error' => 'deactivated_account',
                    'message' => 'Your account is inactive.',
                ], 401);
            }

            if ($userCheck) {
                $userCheck->incrementLoginAttempts();
            }

            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
        $user = $request->user();

        if ($user->login_attempts >= 3 && $user->status == 0) {
            return response([
                'error' => 'deactivated_account',
                'message' => 'Your account is inactive.',
            ], 401);
        }

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $user->clearLoginAttempts();

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => $user->load(
                // Load user related entities here
            ),
        ]);
    }
}
