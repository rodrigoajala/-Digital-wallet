<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;


class AuthenticationTokenController extends Controller
{
    public function login(): JsonResponse
    {
        dd('login success');
    }
}
