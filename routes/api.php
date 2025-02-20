<?php

use App\Http\Controllers\API\AuthenticationTokenController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationTokenController::class)->group(function(){
    Route::post('auth/login', 'login');
    Route::middleware('auth:sanctum')->post('auth/logout', 'logout');
});


