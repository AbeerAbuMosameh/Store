<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/index', function () {
    return view('website.pages.index');
});

Route::get('/admins', function () {
    return view('admin.pages.index');
})->name('admin');

//products-details
Route::get('/products', function () {
    return view('website.pages.product');
});

Route::get('/products-details', function () {
    return view('website.pages.product-details');
});
Route::get('/profile-authentication', function () {
    return view('website.pages.profile-authentication');
});

Route::prefix('admin')->group(function () {
    Auth::routes();

//MAIN PAGE
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//PRODUCTS
    Route::resource('products', App\Http\Controllers\ProductController::class);

//cATEGORIES
    Route::resource('categories', App\Http\Controllers\CategoryController::class);

});

