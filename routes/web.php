<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/news', function () {
    return view('news');
});

Route::get('/discounts', function () {
    return view('discounts');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
