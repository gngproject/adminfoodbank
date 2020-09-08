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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Cek-Identitas', 'DataController@datapenerima')->name('input.penerima');
Route::get('/Cek-NIK', 'DataController@ceknik')->name('cek.nik');
Route::get('/Hasil-Cek', 'DataController@resultdata')->name('result.penerima');
Route::middleware('role:admin')->get('/dashboard', 'AdminController@index')->name('dashboard');