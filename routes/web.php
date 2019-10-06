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

Route::get('/tambah/{a}/{b}','Belajar controller@tambah');
Route::get('/refreshcapcha','HomeController@refreshcapcha');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel/store', 'KategoriArtikelController@store')->name('kategori_artikel.store');

Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');

Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');