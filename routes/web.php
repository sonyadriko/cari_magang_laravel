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

Route::get('/register_siswa', function () {
    return view('register_siswa');
});
Route::get('/register_perusahaan', function () {
    return view('register_perusahaan');
});
Route::view('/dashboard','dashboard')->name('dashboard');

// Lowongan Bos
Route::get('/perusahaan/lowongan_perusahaan','LowonganController@index'); //LIST USER
Route::get('/perusahaan/lowongan_perusahaan/create','LowonganController@create'); //FORM CREATE
Route::post('perusahaan/lowongan_perusahaan/create','LowonganController@store'); //INSERT DATA (POST)
Route::get('perusahaan/lowongan_perusahaan/edit/{id}','LowonganController@edit'); //FORM EDIT
Route::post('perusahaan/lowongan_perusahaan/update/{id}','LowonganController@update'); //UPDATE DATA (POST/PUT)
Route::get('perusahaan/lowongan_perusahaan/delete/{id}','LowonganController@destroy'); //DELETE DATA
Route::get('perusahaan/lowongan_perusahaan/view','LowonganController@view'); //view report
Route::get('perusahaan/lowongan_perusahaan/pdf','LowonganController@pdf'); //download pdf
Route::get('perusahaan/lowongan_perusahaan/excel','LowonganController@excel'); //download excel

