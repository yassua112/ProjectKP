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
Route::group(array('prefix' => 'admin'),function(){
    
    Route::get('/dashboard','Admin\DashboardControler@dashboard')->name('admin.dashboard');

});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/', 'HomeController@index')->name('home');
Route::get('/bidang-hukum', 'HomeController@bidang_hukum')->name('bidanghukum');
Route::get('/bidang-hukum/{id}', 'HomeController@bidang_hukum_show')->name('bidanghukum.show');
Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/{id}', 'HomeController@lawyers_show')->name('lawyers.show');


    
    Route::get('/dashboard/form', 'DashboardControler@form_create')->name('form.create');
    Route::get('/artikelhukum', 'DashboardControler@form_show')->name('artikel.hukum');
    Route::post('/detailartikel', 'DashboardControler@form_pref')->name('detail.artikel');

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



Route::get('/dashboard/table','BidangHukumController@index')->name('table');
Route::get('/dashboard/table/create','BidangHukumController@create')->name('table.create');
Route::get('/dashboard/table/{id}/edit','BidangHukumController@edit');

Route::get('/kontak-kami',function(){
    return view('kontakkami');
})->name('kontakkami');


Route::get('/dokumentasi-kegiatan',function() {
	return view('dokumentasi');
})->name('dokumentasi');



