<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\DefaultViewData;

Route::middleware(([
    "auth",
    DefaultViewData::class
]))->group(function() {
    Route::get('/', [DashboardController::class, "index"])->name("dashboard");
    Route::prefix("category")->name("category.")->group(function() {
        Route::get("/", [CategoryController::class, "index"])->name("index");
    });
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/signin', [AuthController::class, "signin"]);
    Route::get('/logout', [AuthController::class, "logout"]);
});