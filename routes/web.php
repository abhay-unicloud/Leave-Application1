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
    return view('pages.index');
})->name('index');
Route::get('/index2', function () {
    return view('pages.index2');
})->name('index2');
Route::get('/Leave-Application', function () {
    return view('pages2.Application-form');
})->name('Leave-Application');
