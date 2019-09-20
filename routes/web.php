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

Route::get('/', function () { //home
    return view('home.home');
});
Route::get('/iklim', function () { //iklim
    return view('home.iklim');
});
Route::get('/geografis', function () { //geo
    return view('home.geografis');
});
Route::get('/penduduk', function () { //penduduk
    return view('home.penduduk');
});
Route::get('/desa', function () { //desa
    return view('home.desa1');
});
Route::get('/desa', function () { //desa
    return view('home.desa1');
});


Route::get('/coba', function () { //coba
    return view('home.coba');
});
