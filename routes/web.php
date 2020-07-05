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

Route::get('/','ArtikelController@home'); //menampilkan home yang berisi gambar ERD

Route::get('/artikel','ArtikelController@index'); //menampilkan semua artikel
Route::post('/artikel','ArtikelController@store'); //menyimpan artikel baru

Route::get('artikel/create','ArtikelController@create'); //membuat artikel baru
Route::get('artikel/{id}/edit', 'ArtikelController@edit'); //mengedit artikel berdasarkan id tertentu

Route::get('/artikel/{id}', 'ArtikelController@show'); //menampilkan artikel berdasarkan id tertentu
Route::put('/artikel/{id}', 'ArtikelController@update'); //menyimpan hasil edit artikel berdasarkan id tertentu
Route::delete('/artikel/{id}', 'ArtikelController@destroy'); //menghapus artikel berdasarkan id tertentu


