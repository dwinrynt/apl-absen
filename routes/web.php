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
    return view('welcome');
});

Route::get('/tapping', function() {
    return view('tapping.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/data-siswa', function () {
    return view('dataSiswa');
});

Route::get('/absensi-guru', function () {
    return view('absensiGuru');
});

Route::get('/detailAbsensiGuru', function () {
    return view('detailAbsensiGuru');
});

Route::get('/absensi-guru/tambah', function () {
    return view('tambahAbsensiGuru');
});
