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



Auth::routes();
Route::get('/dashboard','Admin\DashboardControler@dashboard')->name('admin.dashboard');
Route::get('/', 'HomeController@index')->name('home');


Route::get('/dashboard/form', 'Admin\DashboardControler@form_create')->name('form.create');
Route::post('/detailartikel', 'Admin\DashboardControler@form_pref')->name('detail.artikel');

Route::get('/dashboard/table','BidangHukumController@index')->name('table');

Route::get('/dashboard/table/create','BidangHukumController@bidH_create')->name('table.create');
Route::post('/bidang-hukum','BidangHukumController@bidang_pref')->name('table.pref');
Route::get('/dashboard/table/{id}/edit','BidangHukumController@edit')->name('table.show');
Route::post('/dashboard/table/{id}/update','BidangHukumController@update')->name('table.update');
Route::get('/dashboard/table/{id}/delete','BidangHukumController@destroy');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');






Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/{id}', 'HomeController@lawyers_show')->name('lawyers.show');


Route::get('/artikelhukum', 'HomeController@artikelhukum')->name('artikel.hukum');
Route::get('/artikelhukum/{id}', 'HomeController@artikel_show')->name('artikel.show');    





Route::get('/tentang-kami', function () {

    return view('tentangkami');
})->name('tentangkami');


//dari sisi admin website
Route::get('/dashboard/gambar', function () {
    
    return view('dashboard.gambar');
})->name('gambar');


Route::get('/dashboard/data', function () {
    return view('dashboard.data');
})->name('data');


Route::get('/dashboard/layout', function () {
    return view('dashboard.layout');
})->name('layout');



Route::get('/bidang-hukum', 'HomeController@bidang_hukum')->name('bidanghukum');
Route::get('/bidang-hukum/{id}', 'HomeController@bidang_hukum_show')->name('bidanghukum.show');







Route::get('/kontak-kami',function(){
    return view('kontakkami');
})->name('kontakkami');


Route::get('/dokumentasi-kegiatan',function() {
	return view('dokumentasi');
})->name('dokumentasi');



