<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
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
    return view('auth\login');
});

Route::get('/landing', function(){
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/food', FoodController::class);
Route::get('/menu', [FoodController::class, 'menu']);
Route::get('/foodForm', [FoodController::class, 'create']);
Route::post('/addFood', [FoodController::class, 'store']);
Route::post('/history', [FoodController::class, 'history']);
Route::post('/addToCart', [FoodController::class, 'addToCart']);
Route::post('/cart', [FoodController::class, 'showCart']);
Route::post('/deleteFromCart', [FoodController::class, 'destroy']);
Route::post('/submitOrder', [FoodController::class, 'submitOrder']);
Route::post('/editItem', [FoodController::class, 'edit']);
Route::post('/editFood', [FoodController::class, 'editFood']);
Route::post('/deleteItem', [FoodController::class, 'delete']);
