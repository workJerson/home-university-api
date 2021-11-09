<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();
        $authService = new AuthService();
        $response = $authService->login(request(['email', 'password']), $request->remember_me);

        return response($response, $response['status']);
    }
}
