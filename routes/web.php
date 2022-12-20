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
    return view('welcome');
});
//company route
Route::get('/company',[CompanyController::class,'index'])->name('company.index');
Route::get('/company/edit',[CompanyController::class,'edit'])->name('company.edit');
Route::get('/company/delete',[CompanyController::class,'destroy'])->name('company.delete');
Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');
Route::post('/company/save',[CompanyController::class, 'store'])->name('company.save');
//company category route
Route::get('/companyCategory',[CompanyCategoryController::class,'index'])->name('companyCategory.index');

Route::get('/companyCategory/create',[CompanyCategoryController::class, 'create'])->name('companyCategory.create');
Route::post('/companyCategory/save',[CompanyCategoryController::class, 'store'])->name('companyCategory.save');
Route::get('/companyCategory/edit/{id}',[CompanyCategoryController::class,'edit'])->name('companyCategory.edit');
Route::post('/companyCategory/update/{id}',[CompanyCategoryController::class, 'update'])->name('companyCategory.update');
Route::get('/companyCategory/delete/{id}',[CompanyCategoryController::class, 'destroy'])->name('companyCategory.delete');


