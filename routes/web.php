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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/bidang-hukum', 'HomeController@bidang_hukum')->name('bidanghukum');
Route::get('/bidang-hukum/{id}', 'HomeController@bidang_hukum_show')->name('bidanghukum.show');
Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/{id}', 'HomeController@lawyers_show')->name('lawyers.show');



Route::get('/tentang-kami', function () {

    return view('tentangkami');
})->name('tentangkami');

Route::get('/dashboard', function () {
    
    return view('dashboard.wall-dashboard');
})->name('wall-dashboard');

Route::get('/dashboard/gambar', function () {
    
    return view('dashboard.gambar');
})->name('gambar');


Route::get('/dashboard/data', function () {
    return view('dashboard.data');
})->name('data');

Route::get('/dashboard/form', function () {
    return view('dashboard.form');
})->name('form');

Route::get('/dashboard/layout', function () {
    return view('dashboard.layout');
})->name('layout');

Route::get('/dashboard/table', function () {
    return view('dashboard.table');
})->name('table');


Route::get('/kontak-kami',function(){
    return view('kontakkami');
})->name('kontakkami');


Route::get('/dokumentasi-kegiatan',function() {
	return view('dokumentasi');
})->name('dokumentasi');


//Halaman Bagian Artikel
Route::get('/artikel-hukum','ArtikelHukumController@index')->name('artikelhukum');
Route::get('/artikel-hukum/detail-artikel','DetailArtikelController@index');

//Halaman Bagian Lawyer


