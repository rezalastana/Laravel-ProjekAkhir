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

Route::get('/pertanyaan', 'PertanyaanController@artikels')->middleware('auth'); // menampilkan semua

Route::get('/pertanyaan/create', 'PertanyaanController@create')->middleware('auth'); // menampilkan utk membuat artikel baru

Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan data artikel baru

Route::get('/pertanyaan/{id}', 'PertanyaanController@detail'); // menampilkan detail item dengan id 

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); // menampilkan form untuk edit item

Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // menyimpan perubahan dari form edit

Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // menghapus data dengan id

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
