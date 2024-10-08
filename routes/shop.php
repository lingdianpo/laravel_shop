<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index/index', [\App\Http\Controllers\v1\IndexController::class, 'index']);
Route::get('/user/register', [\App\Http\Controllers\v1\UserController::class, 'register']);
