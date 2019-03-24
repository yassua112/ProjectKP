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
    return view('index');
})->name('home');

Route::get('/lawyers',function(){
    return view('lawyers');
})->name('lawyers');

Route::get('/bidang-hukum',function() {
	return view('bidanghukum');
})->name('bidanghukum');

Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/kontak-kami',function(){
    return view('kontakkami');
})->name('kontakkami');

Route::get('/artikel-hukum',function() {
	return view('artikelhukum');
})->name('artikelhukum');

Route::get('/dokumentasi-kegiatan',function() {
	return view('dokumentasi');
})->name('dokumentasi');
