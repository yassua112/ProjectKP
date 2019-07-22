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

Route::get('/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
Route::get('/', 'HomeController@index')->name('home');



Route::get('/dashboard/form', 'Admin\ArtikelController@form_create')->name('form.create');
Route::post('/detailartikel', 'Admin\ArtikelController@form_pref')->name('detail.artikel');


// bidang hukum---------------------------------------------------------------------------------------
Route::get('/dashboard/table','Admin\BidangHukumController@index')->name('table');
Route::get('/dashboard/table/create','Admin\BidangHukumController@bidH_create')->name('table.create');
Route::post('/bidang-hukum','Admin\BidangHukumController@bidang_pref')->name('table.pref');
Route::get('/dashboard/table/{id}/edit','Admin\BidangHukumController@edit')->name('table.show');
Route::post('/dashboard/table/{id}/update','Admin\BidangHukumController@update')->name('table.update');
Route::get('/dashboard/table/{id}/delete','Admin\BidangHukumController@destroy')->name('table.dalate');
//----------------------------------------------------------------------------------------------------

// kariawan---------------------------------------------------------------------------------------
Route::get('/dashboard/data','Admin\LawyersController@index')->name('data');
Route::get('/dashboard/data/create','Admin\LawyersController@createForm')->name('kariawan.create');
Route::post('/dashboard/data','Admin\LawyersController@postkariawan')->name('kariawan.post');
Route::get('dasboard/data/{id}/edit','Admin\LawyersController@edit')->name('kariawan.show');




Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/{id}', 'HomeController@lawyers_show')->name('lawyers.show');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');









Route::get('/artikelhukum', 'HomeController@artikelhukum')->name('artikel.hukum');
Route::get('/artikelhukum/{id}', 'HomeController@artikel_show')->name('artikel.show');    





Route::get('/tentang-kami', function () {

    return view('tentangkami');
})->name('tentangkami');


//dari sisi admin website
Route::get('/dashboard/gambar', function () {
    
    return view('dashboard.gambar');
})->name('gambar');


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



