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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/register_siswa', function () {
    return view('register_siswa');
});
Route::get('/register_bos', function () {
    return view('register_bos');
});

// Route::get('/', function () {
//     return view('register_siswa');
// });

