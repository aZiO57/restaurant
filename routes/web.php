<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false,]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/booking', 'App\Http\Controllers\BookingController');
Route::resource('/menu', 'App\Http\Controllers\MenuController');
Route::resource('/table', 'App\Http\Controllers\TableController');
Route::resource('/feedback', 'App\Http\Controllers\TableController');
