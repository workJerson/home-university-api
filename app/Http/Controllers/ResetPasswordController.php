<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Services\AuthService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    protected $service;
    public function __construct()
    {
        $this->service = new AuthService();
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $request->validated();
        $result = $this->service->resetPassword($request);

        return response($result['message'], $result['status']);
    }
}
