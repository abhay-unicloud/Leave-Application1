<?php

use App\Http\Controllers\Mycontroller;
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
Route::get('/registration-employee-form', function () {
    return view('pages2.registration-employee-form');
})->name('registration-employee-form');
Route::post('/insert', [Mycontroller::class, 'insert'])->name('insert');
Route::post('/emp_data', [Mycontroller::class, 'view'])->name('emp_data');