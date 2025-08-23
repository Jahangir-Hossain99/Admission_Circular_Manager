<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/users', UserController::class);
});

