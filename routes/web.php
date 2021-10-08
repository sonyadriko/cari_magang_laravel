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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login','AuthController@login');


// Route::get('/register_siswa', function () {
//     return view('register_siswa');
// });

Route::get('/registersiswa','SiswaController@create'); //FORM CREATE
Route::post('/registersiswa', 'SiswaController@store');

Route::get('/register_bos', function () {
    return view('register_bos');
});
Route::view('/dashboard','dashboard')->name('dashboard');

Route::get('/lowongan_bos','LowonganController@index'); //LIST USER
Route::get('/lowongan_bos/create','LowonganController@create'); //FORM CREATE
Route::post('/lowongan_bos/create','LowonganController@store'); //INSERT DATA (POST)
Route::get('/lowongan_bos/edit/{id}','LowonganController@edit'); //FORM EDIT
Route::post('/lowongan_bos/update/{id}','LowonganController@update'); //UPDATE DATA (POST/PUT)
Route::get('/lowongan_bos/delete/{id}','LowonganController@destroy'); //DELETE DATA
Route::get('/lowongan_bos/view','LowonganController@view'); //view report
Route::get('/lowongan_bos/pdf','LowonganController@pdf'); //download pdf
Route::get('/lowongan_bos/excel','LowonganController@excel'); //download excel

