<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/blogs/{id}', [BlogController::class, 'edit']);
Route::put('/blogs/{id}', [BlogController::class, 'update']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);
