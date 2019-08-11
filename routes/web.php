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
//artikel------------------------------------------------------------------------------------

// Dari Sisi Admin
// Halaman View Konsultasi


Route::get('/dashboard/artikel', 'Admin\ArtikelController@article_show')->name('adminartikel.show');
Route::get('/dashboard/create/artikel', 'Admin\ArtikelController@tambah_artikel')->name('artikel.create');
Route::post('/detailartikel', 'Admin\ArtikelController@form_pref')->name('detail.artikel');
Route::get('/dashboard/artikel/{id}/delete','Admin\ArtikelController@hapus_artikel')->name('artikel.hapus');
Route::get('/dashboard/artikel/{id}/edit','Admin\ArtikelController@edit_artikel')->name('artikel.edit');
Route::post('/dashboard/artikel/{id}/update','Admin\ArtikelController@update')->name('artikel.update');

// bidang hukum---------------------------------------------------------------------------------
Route::get('/dashboard/table','Admin\BidangHukumController@index')->name('table');
Route::get('/dashboard/table/create','Admin\BidangHukumController@tambah_bidanghukum')->name('table.create');
Route::get('/dashboard/table/{id}/edit','Admin\BidangHukumController@edit_bidanghukum')->name('table.show');
Route::post('/dashboard/table/{id}/update','Admin\BidangHukumController@update')->name('table.update');
Route::get('/dashboard/table/{id}/delete','Admin\BidangHukumController@hapus_bidanghukum')->name('tabel.hapus');
//----------------------------------------------------------------------------------------------------

// kariawan---------------------------------------------------------------------------------------
Route::get('/dashboard/data','Admin\LawyersController@index')->name('data');
Route::get('/dashboard/data/create','Admin\LawyersController@tambah_lawyer')->name('kariawan.create');
Route::post('/dashboard/data','Admin\LawyersController@postkariawan')->name('kariawan.post');
Route::get('/dashboard/data/{id}/view','Admin\LawyersController@view')->name('kariawan.show');
Route::get('/dashboard/data/{id}/edit','Admin\LawyersController@edit_lawyer')->name('kariawan.show');
Route::post('/dashboard/data/{id}/update','Admin\LawyersController@update')->name('kariawan.update');
Route::get('/dashboard/data/{id}/delete','Admin\LawyersController@hapus_lawyer')->name('data.hapus');
//download file kariawan ---------------------------------------------------------------------------
Route::get('/dashboard/lawyers/{fileCV}/download','HomeController@download')->name('data.download');
//gambar dokumentasi----------------------------------------------------------------------
Route::get('/dashboard/gambar/','Admin\DokumentasiController@index')->name('admin.dokumentasi');
Route::get('/dashboard/gambar/create','Admin\DokumentasiController@tambah_dokumentasi')->name('admin.gambar');
Route::post('/dashboard/gambar/create','Admin\DokumentasiController@create')->name('create.gambar');
Route::get('/dashboard/gambar/{id}/delete','Admin\DokumentasiController@hapus_dokumentasi')->name('gambar.hapus');
Route::get('/dashboard/gambar/{id}/edit','Admin\DokumentasiController@edit')->name('gambar.show');
Route::post('/dashboard/gambar/{id}/update','Admin\DokumentasiController@update')->name('gambar.update');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
 
Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentangkami');
//dari sisi admin website
Route::get('/dashboard/layout', function () {
    return view('dashboard.layout');
})->name('layout');

Route::get('/dashboard/konsultasi','KonsultasiController@index')->name('konsultasi');
Route::post('/kontak-kami','KonsultasiController@bidang_pref')->name('konsultasi.pref');
Route::get('/kontak-kami','KonsultasiController@tambah_konsultasi')->name('konsultasi.create');
/*
    Sisi Pengunjung Website
--------------------------- */
Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/ucokrolando','PetinggiController@petinggi1')->name('lawyers.ucok');
Route::get('/lawyers/musadarwinpane','PetinggiController@petinggi2')->name('lawyers.musa');
Route::get('/lawyers/sahatmarulitua','PetinggiController@petinggi3')->name('lawyers.maruli');
Route::get('/lawyers','HomeController@lawyers')->name('lawyers');
Route::get('/lawyers/{id}', 'HomeController@lawyers_show')->name('lawyers.show');

Route::get('/artikel-hukum', 'HomeController@artikelhukum')->name('artikel.hukum');
Route::get('/artikel-hukum/{id}', 'HomeController@artikel_show')->name('artikel.show');  

Route::get('/dokumentasi-kegiatan', 'HomeController@dokumentasikegiatan')->name('dokumentasi');

Route::post('/bidang-hukum','Admin\BidangHukumController@bidang_pref')->name('table.pref');
Route::get('/bidang-hukum', 'HomeController@bidang_hukum')->name('bidanghukum');
Route::get('/bidang-hukum/{id}', 'HomeController@bidang_hukum_show')->name('bidanghukum.show');