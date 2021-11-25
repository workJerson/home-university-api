<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Services\AuthService;

class ForgotPasswordController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new AuthService();
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $request->validated();
        $response = $this->service->forgotPassword($request);

        return response($response['message'], $response['status']);
    }
}
