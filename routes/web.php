<?php

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

Auth::routes();

//CLIENT

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

//ADMIN

Route::get('admin/home', 'AdminController@index')->name('admin.home')->middleware('is_admin');
Route::get('admin/konfirmasi/{id}', 'AdminController@konfirmasi')->middleware('is_admin');
Route::get('admin/cancel/{id}', 'AdminController@cancel')->middleware('is_admin');

//BARANG
Route::get('product/dashboard', 'ProductController@index')->middleware('is_admin');
Route::get('product/add', 'ProductController@add')->middleware('is_admin');
Route::post('product/upload', 'ProductController@upload')->middleware('is_admin');
Route::get('product/edit/{id}', 'ProductController@edit')->middleware('is_admin');
Route::post('product/update/', 'ProductController@update')->middleware('is_admin');
Route::get('product/details/{id}', 'ProductController@details')->middleware('is_admin');
Route::get('product/delete/{id}', 'ProductController@delete')->middleware('is_admin');

//USSER
Route::get('user/dashboard', 'UserController@index')->middleware('is_admin');
Route::get('user/add', 'UserController@add')->middleware('is_admin');
Route::post('user/store', 'UserController@store')->middleware('is_admin');
Route::get('user/edit/{id}', 'UserController@edit')->middleware('is_admin');
Route::post('user/update/', 'UserController@update')->middleware('is_admin');
Route::get('user/delete/{id}', 'UserController@delete')->middleware('is_admin');

//PESANAN
Route::get('pesanan/dashboard', 'PesananController@index')->middleware('is_admin');
Route::get('pesanan/detail/{id}', 'PesananController@detail')->middleware('is_admin');
Route::get('pesanan/delete/{id}', 'PesananController@delete')->middleware('is_admin');