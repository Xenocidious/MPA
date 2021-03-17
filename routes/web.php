<?php

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
    return view('index');
});
Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/register', 'App\Http\Controllers\UserController@getRegister');
Route::get('/login', 'App\Http\Controllers\UserController@getLogin');


Route::get('/products-page/{category}', 'App\Http\Controllers\CategoryController@index')->name('productspage');


Route::get('/cart', [
    'uses' => 'App\Http\Controllers\CartController@index',
    'as' => 'color.shoppingCart'
]);
Route::get('/add-to-cart/{id}', [
    'uses' => 'App\Http\Controllers\CartController@Store',
    'as' => 'color.addToCart'
]);
Route::get('/decrease/{id}', [
    'uses' => 'App\Http\Controllers\CartController@Decrease',
    'as' => 'color.decrease'
]);
Route::get('/remove-from-cart/{id}', [
    'uses' => 'App\Http\Controllers\CartController@Destroy',
    'as' => 'color.destroy'
]);