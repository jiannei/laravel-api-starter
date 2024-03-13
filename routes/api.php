<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('users', [UsersController::class, 'index']);
Route::get('users/paginate', [UsersController::class, 'paginate']);
Route::get('users/simple-paginate', [UsersController::class, 'simplePaginate']);
Route::get('users/cursor-paginate', [UsersController::class, 'cursorPaginate']);
Route::get('users/item', [UsersController::class, 'item']);
Route::get('users/array', [UsersController::class, 'array']);
Route::get('failure', [UsersController::class, 'failure']);
Route::get('exception', [UsersController::class, 'exception']);
Route::get('validation', [UsersController::class, 'validationException']);
