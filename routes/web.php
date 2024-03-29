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
    return view('homepage');
});

Route::get('/shop', function () {
    return view('product');
});


Route::get('/admin', function () {
    return view('admin/categories');
});

Route::get('/add-categories', function () {
    return view('admin/manage_categories');
});

Route::get('/product', function () {
    return view('admin/product');
});

Route::get('/manage-product', function () {
    return view('admin/manage_product');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('userpage');
Route::get('/user', 'UserController@index')->name('userpage');
Route::get('/admin', 'AdminController@index')->name('categories');

