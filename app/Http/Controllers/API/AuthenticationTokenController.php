<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use JetBrains\PhpStorm\NoReturn;

class AuthenticationTokenController extends Controller
{
    #[NoReturn] public function login(LoginRequest $request): JsonResponse
    {
        dd('login success');
    }
}
