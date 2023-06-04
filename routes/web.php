<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('all-users', [UserController::class, 'all_users']);
Route::get('user/{id}', [UserController::class, 'user_by_id']);
