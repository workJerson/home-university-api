<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function login($credentials, $remember)
    {
        if (!Auth::attempt($credentials, $remember)) {
            $checkUser = $this->user->findForPassport($credentials['username']);

            if ($checkUser && $checkUser->login_attempts >= 3 && $checkUser->status == 0) {
                $checkUser->incrementLoginAttempts();

                return [
                    'status' => 401,
                    'message' => 'Your account is inactive.',
                ];
            }

            return [
                'status' => 401,
                'message' => 'Invalid login credentials.',
            ];
        }

        // Successful login
        $user = request()->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $user->clearLoginAttempts();

        if ($remember) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();

        return [
            'status' => 200,
            'message' => 'Successfully logged in.',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'user' => $user->load(['detail', 'school']),
        ];
    }
}
