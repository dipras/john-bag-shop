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
        Route::get("/create", [CategoryController::class, "create"])->name("create");
        Route::post("/store", [CategoryController::class, "store"]);
        Route::get("/edit/{id}", [CategoryController::class, "edit"])->name("edit");
        Route::post("/update/{id}", [CategoryController::class, "update"]);
        Route::get("/destroy/{id}", [CategoryController::class, "destroy"]);
    });
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/signin', [AuthController::class, "signin"]);
    Route::get('/logout', [AuthController::class, "logout"]);
});