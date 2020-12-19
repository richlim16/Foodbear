<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

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

Route::resource('/', ViewController::class);
Route::resource('/user', UserController::class);
Route::get('/form', [ViewController::class, 'create']);
Route::post('/add', [ViewController::class, 'store']);


Route::post('/user/add', [UserController::class, 'store']);
