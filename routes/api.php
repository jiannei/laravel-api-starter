<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UsersController::class, 'index']);
Route::get('users/paginate', [UsersController::class, 'paginate']);
Route::get('users/simple-paginate', [UsersController::class, 'simplePaginate']);
Route::get('users/item', [UsersController::class, 'item']);
Route::get('users/array', [UsersController::class, 'array']);
Route::get('failure', [UsersController::class, 'failure']);
Route::get('exception', [UsersController::class, 'exception']);
Route::get('validation', [UsersController::class, 'validationException']);
