<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
	return view ('home');
})->name('home');

Route::get('/about',function(){
	return view ('about');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postLogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/siswa', 'SiswaController@index')->name('siswa.view');
	Route::get('/siswa/tambah', 'SiswaController@create');
	Route::post('/siswa/store', 'SiswaController@store');
	Route::get('/data/edit/{id}', 'SiswaController@edit')->name('editData');
	Route::put('/siswa/update/{id}', 'siswaController@update')->name('siswa.update');
	Route::delete('/siswa/delete/{id}', 'siswaController@hapus')->name('siswa.hapus');
});
