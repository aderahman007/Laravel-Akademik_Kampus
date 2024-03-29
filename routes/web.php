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

Route::get('/matakuliah/json', 'MatakuliahController@json');
Route::get('/fakultas/json', 'FakultasController@json');
Route::get('/dosen/json', 'DosenController@json');
Route::get('/jurusan/json', 'JurusanController@json');
Route::get('/ruangan/json', 'RuanganController@json');
Route::get('/tahunakademik/json', 'TahunakademikController@json');
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/matakuliah', 'MatakuliahController');
Route::resource('/dosen', 'DosenController');
Route::resource('/fakultas', 'FakultasController');
Route::resource('/jurusan', 'JurusanController');
Route::resource('/ruangan', 'RuanganController');
Route::resource('/tahunakademik', 'TahunakademikController');
