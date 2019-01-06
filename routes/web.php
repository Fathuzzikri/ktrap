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

// DASHBOARD
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/statistik', 'StatistikController@index')->name('statistik');
Route::get('/detail', 'DetailSeranganController@index')->name('detail_serangan');
Route::get('/notif', 'NotifikasiController@index')->name('notif');

// DETAIL AKTIVITAS
Route::get('/lihat/{session}','DetailSeranganController@lihat_aktivitas')->name('lihat_aktivitas');

// LOG NOTIF 
Route::get('/notif/{id}','NotifikasiController@destroy')->name('hapus log');
Route::get('/tes_notifikasi','TestNotifikasi@test');


