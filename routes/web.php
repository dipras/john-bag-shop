<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/signin', [AuthController::class, "signin"]);
    Route::get('/logout', [AuthController::class, "logout"]);
});