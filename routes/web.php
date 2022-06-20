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

Route::get('/user', 'AuthController@user');

Route::get('/formuser', 'AuthController@formuser');

Route::get('/login', 'AuthController@login');

Route::get('/mahasiswa72200408', 'Mahasiswa72200408Controller@mahasiswa');

Route::get('/mahasiswa72200408/formahasiswa72200408', 'Mahasiswa72200408Controller@formahasiswa72200408');

Route::post('/mahasiswa72200408/simpanmahasiswa', 'Mahasiswa72200408Controller@simpanmahasiswa');

Route::get('/mahasiswa72200408/editmahasiswa{nim}', 'Mahasiswa72200408Controller@editmahasiswa');

Route::put('/mahasiswa72200408/updatemahasiswa{nim}', 'Mahasiswa72200408Controller@updatemahasiswa');

Route::get('/mahasiswa72200408/hapusmahasiswa{nim}', 'Mahasiswa72200408Controller@hapusmahasiswa');

Route::get('posts/delete/{id}', 'PostController@destroy');