<?php

use App\Http\Controllers\CompanyCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
    return view('super_admin.layouts');
});
//company route
Route::get('/company',[CompanyController::class,'index'])->name('company.index');
Route::get('/company/edit',[CompanyController::class,'edit'])->name('company.edit');
Route::get('/company/delete',[CompanyController::class,'destroy'])->name('company.delete');
Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');
Route::post('/company/save',[CompanyController::class, 'save'])->name('company.save');

