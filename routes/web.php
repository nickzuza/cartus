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
    return view('home');
});
Route::get('/oneNew', function () {
    return view('oneNew');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/newsPage', function () {
    return view('newsPage');
});
Route::get('/catalog2', function () {
    return view('catalog2');
});
Route::get('/catalog3', function () {
    return view('catalog3');
});
Route::get('/docPage', function () {
    return view('documentation');
});
Route::get('/contacts', function () {
    return view('contacts');
});