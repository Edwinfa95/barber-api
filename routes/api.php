<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('appointments', [AppointmentController::class, 'index']);
Route::get('services', [ServiceController::class, 'index']);

Route::get('barber', [UserController::class, 'barber']);
Route::get('client', [UserController::class, 'client']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('barber', [AuthController::class, 'register']);
    Route::delete('barber/{id}', [AuthController::class, 'delete']);

    Route::post('client', [AuthController::class, 'register']);
    Route::delete('client/{id}', [AuthController::class, 'delete']);
    
    Route::post('services', [ServiceController::class, 'store']);
    Route::post('appointments', [AppointmentController::class, 'store']);
});