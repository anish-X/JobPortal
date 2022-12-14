<?php

use App\Http\Controllers\CompanyCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;

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
Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');

Route::post('/company/save',[CompanyController::class, 'store'])->name('company.save');
//company category route
Route::get('/companyCategory/create',[CompanyCategoryController::class, 'create'])->name('companyCategory.create');
Route::post('/companyCategory/save',[CompanyCategoryController::class, 'store'])->name('companyCategory.save');


Route::resource('/users/',UserController::class);

Route::get('job/',[JobController::class,'index'])->name('job.index');
Route::post('job/create', [JobController::class, 'store'])->name('job.create');
Route::get('job/category', [JobCategoryController::class,'index'])->name('job.category');
Route::post('job/category/create', [JobCategoryController::class, 'store'])->name('category.create');
