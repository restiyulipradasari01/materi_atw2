<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/template', function () {
    return view('template.base');
});

Route::get('/template.produk', function () {
    return view('template.produk');
});

Route::get('/template.about', function () {
    return view('template.about');
});

////////////////////////// Admin

Route::get('/template.admin', function () {
    return view('template.admin.beranda');
});


Route::get('/template.admin.produk', function () {
    return view('template.admin.produk');
});

Route::get('/template.admin.kategori', function () {
    return view('template.admin.kategori');
});