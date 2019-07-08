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
    return view('user');
});

Route::get('/admin', 'AdminC@index'); // halaman admin

Route::get('/admin/edit/{id}','AdminC@edit'); //edit data tamu

Route::get('/admin/hapus/{id}', 'AdminC@hapus'); // hapus tamu

Route::get('/user', 'UserC@index'); // tampilan registrasi tamu

Route::post('/user/datang', 'UserC2@index'); // input tamu ke database

Route::post ('/admin/edit', 'UserC2@edit');