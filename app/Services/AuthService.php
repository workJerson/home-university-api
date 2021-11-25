<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseStatusCodeSame;

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
                return [
                    'status' => 401,
                    'message' => 'Your account is inactive.',
                ];
            }

            $checkUser->incrementLoginAttempts();

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

    public function forgotPassword($request)
    {
        $statusCode = 400;
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            $statusCode = 200;
        }

        return [
            'message' => trans($status),
            'status' => $statusCode,
        ];
    }

    public function resetPassword($request){
        $statusCode = 400;

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->password = $password;
                $user->save();

                $user->setRememberToken(Str::random(60));

                event(new PasswordReset($user));
            }
        );
        if ($status == Password::PASSWORD_RESET) {
            $statusCode = 200;
        }
        return [
            'message' => trans($statusCode),
            'status' => $statusCode,
        ];
    }
}
