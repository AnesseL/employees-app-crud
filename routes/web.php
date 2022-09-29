<?php

use App\Http\Controllers\EmployeesController;
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

Route::get('/', [EmployeesController::class, 'index'])->name('employees.list');
Route::get('/employee-add', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employee-add', [EmployeesController::class, 'store'])->name('employees.store');

Route::get('/employee-edit/{id}', [EmployeesController::class, 'edit'])->name('employees.edit');


Route::get('/about-us', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');
