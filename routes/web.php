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
    return view('user.login');
});
//company route
Route::get('/company',[CompanyController::class,'index'])->name('company.index');
Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');

Route::post('/company/save',[CompanyController::class, 'store'])->name('company.save');
//company category route
Route::get('/companyCategory/create',[CompanyCategoryController::class, 'create'])->name('companyCategory.create');
Route::post('/companyCategory/save',[CompanyCategoryController::class, 'store'])->name('companyCategory.save');

Route::get('job/',[JobController::class,'index'])->name('job.index');
Route::post('job/create', [JobController::class, 'store'])->name('job.create');
Route::get('job/category', [JobCategoryController::class,'index'])->name('job.category');
Route::post('job/category/create', [JobCategoryController::class, 'store'])->name('category.create');

//User Controller
Route::get('/admin/dashboard',[App\Http\Controllers\UserController::class,'index'])->name('admin.dashboard');
Route::get('user/login',[App\Http\Controllers\UserController::class,'showForm'])->name('user.login');
Route::post('user/login/proceed',[App\Http\Controllers\UserController::class,'login'])->name('user.login.proceed');
Route::get('user/register',[App\Http\Controllers\UserController::class,'create'])->name('user.register');
Route::post('user/register/proceed',[App\Http\Controllers\UserController::class,'save'])->name('user.register.proceed');