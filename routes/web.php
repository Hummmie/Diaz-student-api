<?php

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return 'Welcome to your Laravel application!';
});
Route::get('/register', [UserController::class, 'showRegistrationForm']);
// Create
Route::post('/users', [UserController::class, 'store']);

// Read
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

// Update
Route::put('/users/{id}', [UserController::class, 'update']);
Route::patch('/users/{id}', [UserController::class, 'update']);

// Delete
Route::delete('/users/{id}', [UserController::class, 'destroy']);

