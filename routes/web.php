<?php

use App\Http\Controllers\DiscountController;
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

Route::get('/locale/{locale}', function ($locale) {
    if (file_exists(resource_path("lang/$locale")))
        session()->put('locale', $locale);
    return redirect('home');
})->name('locale');

Route::get('/', function () {
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix('menu')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menu');
    Route::get('/pdf', [MenuController::class, 'makepdf'])->name('menuPdf');
    Route::get('/{servingID}', [MenuController::class, 'details'])->name('menuItem');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/discounts', [DiscountController::class, 'index'])->name('discounts');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
