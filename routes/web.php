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
    return view('pages.Application-form');
})->name('Leave-Application');
Route::get('/registration-employee-form', [Mycontroller::class,'registration_employee'])->name('registration-employee-form');
Route::get('/tables', [Mycontroller::class, 'tables'])->name('tables');
Route::get('/datatable-employee', [Mycontroller::class, 'datatable_employee'])->name('datatable-employees');
Route::get('/datatable-department', [Mycontroller::class, 'datatable_department'])->name('datatable-departments');
Route::get('/datatable-designation', [Mycontroller::class, 'datatable_designation'])->name('datatable-designations');
Route::get('/datatable-staff', [Mycontroller::class, 'datatable_staff'])->name('datatable-staff');
Route::get('/datatable-leaves', [Mycontroller::class, 'datatable_leaves'])->name('datatable-leaves');
Route::get('/datatable-leave-types', [Mycontroller::class, 'leave-types'])->name('datatable-leave_types');
Route::get('/datatable-migrations', [Mycontroller::class, 'migrations'])->name('datatable-migrations');  
Route::post('/insert', [Mycontroller::class, 'insert'])->name('insert');
Route::post('/emp_data', [Mycontroller::class, 'view'])->name('emp_data');
Route::get('updating-employee-form', [Mycontroller::class,'updating_employee'])->name('updating-employee-form-dst-dpt');
Route::get('updating-employee-form/edit/{id}', [Mycontroller::class, 'edit'])->name('updating-employee-form-edit');
Route::post('updating-employee-form', [Mycontroller::class, 'update'])->name('updating-employee-form/update');
Route::get('updating-employee-formdelete/{id}', [Mycontroller::class, 'delete'])->name('updating-employee-form-delete');