<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DependentDropdownController;
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


Route::get('login', function () {
    return (view('auth/login'));
});
Route::get('dependent-dropdown', 'App\Http\Controllers\DependentDropdownController@index')
    ->name('dependent-dropdown.index');

Route::post('dependent-dropdown', 'App\Http\Controllers\DependentDropdownController@store')
    ->name('dependent-dropdown.store');

Route::post('dependent-dropdown-city', 'App\Http\Controllers\DependentDropdownController@store_city')
    ->name('dependent-dropdown.store_city');

Route::post('dependent-dropdown-district', 'App\Http\Controllers\DependentDropdownController@store_district')
    ->name('dependent-dropdown.store_district');


Auth::routes();

Route::get('', function () {
    return (view('user/index'));
})->middleware('auth');

Route::get('register', 'App\Http\Controllers\DependentDropdownController@regist_drop')->name('register');


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/products/{type}', [\App\Http\Controllers\ProductsController::class, 'index'])->name('getProduct');
Route::get('/produk', [\App\Http\Controllers\ProductsController::class, 'view'])->name('viewProduct');
Route::get('/produk/{id}', [\App\Http\Controllers\ProductsController::class, 'ProductDetail'])->name('getDetailProduct');

Route::get('/cart',[\App\Http\Controllers\CartController::class, 'index'])->middleware('auth')->name('viewCart');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'Store'])->name('addCart');

Route::post('/checkout',[\App\Http\Controllers\PesananController::class, 'checkoutView'])->middleware('auth')->name('checkoutView');

Route::get('/user/checkout', function () {
    return (view('user/checkout'));
})->middleware('auth')->name('CheckOut');

Route::post('/pesan',[\App\Http\Controllers\PesananController::class, 'createPesanan'])->middleware('auth')->name('pesan');
Route::get('/pesanan/{id}',[\App\Http\Controllers\PesananController::class, 'detailPesanan'])->middleware('auth')->name('detailPesananView');

Route::get('/user/invoice', function () {
    return (view('user/invoice'));
})->middleware('auth')->name('Invoice');

Route::get('/pesanan/{id}/confirmpay', function ($id) {
    return (view('user/payconfirm', ["data"=>$id]));
})->middleware('auth')->name('payconfirm');
Route::post('/pesanan/{id}/confirmpay', [\App\Http\Controllers\PesananController::class, 'pay'])->middleware('auth')->name('sendpay');

Route::get('/user/upload', function () {
    return (view('user/upload'));
})->middleware('auth')->name('upload');

Route::get('/user/rules', function () {
    return (view('user/rules'));
})->middleware('auth')->name('rules');

Route::get('/user/preview', function () {
    return (view('user/preview'));
})->middleware('auth')->name('preview');
