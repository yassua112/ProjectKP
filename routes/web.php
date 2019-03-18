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
	return view('bhukum');
})->name('bhukum');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/kontak-kami',function(){
    return view('contact');
})->name('contact');

Route::get('/artikel-hukum',function() {
	return view('article');
})->name('article');

Route::get('/dokumentasi-kegiatan',function() {
	return view('documentation');
})->name('documentation');
