<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;
use App\Models\Job;

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

Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');
Route::post('/company/save',[CompanyController::class, 'save'])->name('company.save');

Route::get('job/',[JobController::class,'index'])->name('job.index');
Route::post('job/create', [JobController::class, 'store'])->name('job.create');
Route::get('job/category', [JobCategoryController::class,'index'])->name('job.category');
Route::post('job/category/create', [JobCategoryController::class, 'store'])->name('category.create');
