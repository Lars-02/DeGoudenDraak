<?php

use App\Http\Controllers\AllergenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CocktailController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServingController;
use App\Http\Controllers\TabletController;
use App\Http\Controllers\UserController;
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

Route::get('menu/pdf', [MenuController::class, 'makepdf'])->name('menuPdf');
Route::resource('menu', ServingController::class)
    ->parameter('menu', 'serving')
    ->names('serving');

Route::get('/news', function () {
    return view('news');
});

Route::resource('user', UserController::class)
    ->except('create', 'store', 'show');

Route::resource('role', RoleController::class)
    ->only('index', 'edit', 'update');


Route::resource('offer', OfferController::class)
    ->except('show');

Route::resource('category', CategoryController::class)
    ->except('show', 'create');

Route::resource('allergen', AllergenController::class)
    ->only('index', 'store', 'destroy');

Route::group(['middleware' => ['auth', 'cashier']], function () {
    Route::resource('order', OrderController::class);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('tablet')->group(function () {
    Route::get('/login', function () {
        return view('tablet.login');
    });
    Route::post('/login', [TabletController::class, 'login']);

    Route::get('/menu/{tablenumber}', [ServingController::class, 'tabletMenu']);

    Route::get('/cocktails/{tablenumber}', [CocktailController::class, 'index'])->name('cocktails');

    Route::get('/help/{tablenumber}', [TabletController::class, 'sendHelp']);
});
