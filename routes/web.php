<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ckeditorController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowProducts;
use App\Http\Controllers\Test;
use App\Http\Middleware\EnsureValidClient;
use App\Http\Middleware\IsLogged;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('prodDetails/{id}', [ShowProducts::class, 'getProducts'])->name('prodDetails');

Route::post('cart/store', [Test::class, 'store'])->name('cart/store');

Route::delete('cart/delete/{rowId}', [Test::class, 'deleteCart'])->name('cart/delete');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products', function () {
        return view('admin.products');
    })->name('products');


    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');


});

Route::get('cart.fetch', function () {
    return view('cartItems');
})->name('cart.fetch');


Route::get('user/login', [AuthController::class, 'loginPage'])->middleware(IsLogged::class);
Route::get('client/dashboard', function () {
    return view('clientdashboard');
})->name('client/dashboard')
    ->middleware(EnsureValidClient::class);


Route::get('migrate', function () {
    Artisan::call('migrate');
    return Artisan::output();
});

Route::get('storage', function () {
     Artisan::call('storage:link');
    return Artisan::output();
});


Route::get('ck', [ckeditorController::class, 'index']);
Route::get('category/{category_slug}', [CategoryController::class, 'index'])
->name('category');
Route::post('search',[SearchController::class,'search'])->name('search');
