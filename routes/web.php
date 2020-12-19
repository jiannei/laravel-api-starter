<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Jiannei\Response\Laravel\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('author', function () {
    $response = Http::withOptions(['timeout' => 3])->get('https://api.github.com/users/Jiannei');
    $response->throw();

    return Response::success($response->json());
});

Route::get('repo', function () {
    $response = Http::withOptions(['timeout' => 3])->get('https://api.github.com/repos/Jiannei/laravel-api-starter');
    $response->throw();

    return Response::success($response->json());
});
