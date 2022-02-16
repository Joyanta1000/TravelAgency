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
    return view('website.owner.index');
});


Route::get('/hotel-detailed', function () {
    return view('website.owner.hotel-detailed');
})->name('hotel-detailed');

Route::get('/dashboard1', function () {
    return view('website.owner.dashboard1');
})->name('dashboard1');
