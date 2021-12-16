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

Route::get('/pesanan/{id}/album', [\App\Http\Controllers\AlbumController::class, 'index'])->middleware('auth')->name('album');
Route::post('/pesanan/{id}/album/upfirst/{id_product}', [\App\Http\Controllers\AlbumController::class, 'uploadFirst'])->middleware('auth')->name('uploadfirstphoto');
Route::post('/pesanan/{id}/album/upone/{id_product}', [\App\Http\Controllers\AlbumController::class, 'uploadOne'])->middleware('auth')->name('uploadone');
Route::post('/pesanan/{id}/album/updatejudul/{id_product}', [\App\Http\Controllers\AlbumController::class, 'updateJudul'])->middleware('auth')->name('upjudul');
Route::post('/pesanan/{id}/album/revisi/{id_product}', [\App\Http\Controllers\AlbumController::class, 'addRevisi'])->middleware('auth')->name('revisi');

Route::post('/updatestatus/{id}', [\App\Http\Controllers\PesananController::class, 'updateStatus'])->middleware('auth')->name('updateStatus');

Route::get('/user/upload', function () {
    return (view('user/upload'));
})->middleware('auth')->name('upload');

Route::get('/user/rules', function () {
    return (view('user/rules'));
})->middleware('auth')->name('rules');

Route::get('/user/preview', function () {
    return (view('user/preview'));
})->middleware('auth')->name('preview');

Route::get('/user/profile', function () {
    return (view('user/profile'));
})->middleware('auth')->name('profile');

Route::get('/user/order', function () {
    return (view('user/order'));
})->middleware('auth')->name('order');

Route::get('/user/howto', function () {
    return (view('user/howto'));
})->middleware('auth')->name('howto');

Route::get('/user/contact', function () {
    return (view('user/contact'));
})->middleware('auth')->name('contact');


    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

    Route::get('/produk', 'App\Http\Controllers\ProdukController@index')->name('getProdukAdmin');
    Route::get('/produk/add', 'App\Http\Controllers\ProdukController@add')->name('addProdukAdmin');
    Route::post('/produk/create', 'App\Http\Controllers\ProdukController@create')->name('createProdukAdmin');
    Route::get('/produk/{id}/detail', 'App\Http\Controllers\ProdukController@view')->name('detailProdukAdmin');
    Route::get('/produk/{id}/edit', 'App\Http\Controllers\ProdukController@edit')->name('editProdukAdmin');
    Route::post('/produk/{id}/update', 'App\Http\Controllers\ProdukController@update')->name('updateProdukAdmin');
    Route::get('/produk/{id}/delete', 'App\Http\Controllers\ProdukController@delete')->name('deleteProdukAdmin');

    Route::get('/customer', 'App\Http\Controllers\UserController@listCustomer')->name('customerAdmin');


    Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('orderProdukAdmin');
    Route::get('/order/{id}/details', 'App\Http\Controllers\OrderController@detailorder')->name('detailProdukAdmin');
    Route::get('/order/{id}/{status}/update', 'App\Http\Controllers\OrderController@update')->name('updateProdukAdmin');

    Route::get('/admin', 'App\Http\Controllers\UserController@listAdmin')->name('controlAdmin');
    Route::get('/admin/add', 'App\Http\Controllers\UserController@addAdmin')->name('addUserAdmin');
    Route::post('/admin/create', 'App\Http\Controllers\UserController@createAdmin')->name('createUserAdmin');
    Route::get('/admin/{id}/delete', 'App\Http\Controllers\UserController@deleteAdmin')->name('deleteUserAdmin');

    Route::get('/admin/profil', function () {
        return view('admin.profil_admin')->name('profileAdmin');
    });