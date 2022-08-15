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

//tampilan depan
Route::get('/', function () {
    return view('welcome');
});

route::get('template', function(){
    return view('template.base');
});

route::get('login', function(){
    return view('login');
});

route::get('register', function(){
    return view('register');
});

route::get('products', function(){
    return view('products');
});

route::get('index', function(){
    return view('index');
});

route::get('detail_products', function(){
    return view('detail_products');
});

route::get('category', function(){
    return view('category');
});





//admin
Route::get('Admin', function () {
    return view('template.Adminbase');
});

Route::get('AdminBeranda', function () {
    return view('AdminBeranda');
});

Route::get('AdminProduk', function () {
    return view('AdminProduk');
});

Route::get('AdminKategori', function () {
    return view('AdminKategori');
});

Route::get('AdminPromo', function () {
    return view('AdminPromo');
});

Route::get('AdminPelanggan', function () {
    return view('AdminPelanggan');
});

Route::get('AdminSuplier', function () {
    return view('AdminSuplier');
});


