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





Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentangkami');

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
Route::get('/lawyers','LawyersController@index')->name('lawyers');
Route::get('/lawyers/founder','DetailLawyersController@index');
