<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee/add/{id}', 'add')->name('employee.add');
    Route::get('/employee/edit/{id}', 'edit')->name('employee.edit');
    Route::get('/employee/destroy/{id}', 'destroy')->name('employee.destroy');
});

