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
