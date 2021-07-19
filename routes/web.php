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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-buat', 'MahasiswaController@create')->name('tambah_mahasiswa');
Route::post('mahasiswa-simpan', 'MahasiswaController@store')->name('simpan_mahasiswa');
Route::get('mahasiswa-edit/{id}', 'MahasiswaController@edit')->name('edit_mahasiswa');
Route::post('mahasiswa-update/{id}', 'MahasiswaController@update')->name('update_mahasiswa');
Route::get('mahasiswa-hapus/{id}', 'MahasiswaController@destroy')->name('hapus_mahasiswa');
Route::get('mahasiswa-search', 'UserController@searchmahasiswa')->name('search_mahasiswa');

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('matkul-buat', 'MatkulController@create')->name('tambah_matkul');
Route::post('matkul-simpan', 'MatkulController@store')->name('simpan_matkul');
Route::get('matkul-edit/{id}', 'MatkulController@edit')->name('edit_matkul');
Route::post('matkul-update/{id}', 'MatkulController@update')->name('update_matkul');
Route::get('matkul-hapus/{id}', 'MatkulController@destroy')->name('hapus_matkul');
Route::get('matkul-search', 'UserController@searchmatkul')->name('search_matkul');

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-buat', 'NilaiController@create')->name('tambah_nilai');
Route::post('nilai-simpan', 'NilaiController@store')->name('simpan_nilai');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('edit_nilai');
Route::post('niali-update/{id}', 'NilaiController@update')->name('update_nilai');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('hapus_nilai');
Route::get('nilai-search', 'UserController@searchnilai')->name('search_nilai');