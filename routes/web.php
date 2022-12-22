<?php

use App\Http\Controllers\CompanyCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Middleware\AdminLogin;
use App\Http\Controllers\SubscriptionController;

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

Route::resource('companies',CompanyController::class);

// Route::get('/company',[CompanyController::class,'index'])->name('company.index');
// Route::get('/company/edit',[CompanyController::class,'edit'])->name('company.edit');
// Route::get('/company/delete',[CompanyController::class,'destroy'])->name('company.delete');
// Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');
// Route::post('/company/save',[CompanyController::class, 'store'])->name('company.save');


//company category route
Route::resource('companyCategories',CompanyCategoryController::class);



// Route::get('/companyCategory',[CompanyCategoryController::class,'index'])->name('companyCategory.index');
// Route::get('/companyCategory/create',[CompanyCategoryController::class, 'create'])->name('companyCategory.create');
// Route::post('/companyCategory/save',[CompanyCategoryController::class, 'store'])->name('companyCategory.save');
// Route::get('/companyCategory/edit/{id}',[CompanyCategoryController::class,'edit'])->name('companyCategory.edit');
// Route::post('/companyCategory/update/{id}',[CompanyCategoryController::class, 'update'])->name('companyCategory.update');
// Route::get('/companyCategory/delete/{id}',[CompanyCategoryController::class, 'destroy'])->name('companyCategory.delete');

//Job Route
Route::get('job/',[JobController::class,'index'])->name('job.index');
Route::get('job/view/',[JobController::class,'view'])->name('job.view');
Route::get('job/create', [JobController::class, 'create'])->name('job.create');
Route::post('/job/store',[JobController::class,'store'])->name('job.store');
Route::get('job/category', [JobCategoryController::class,'index'])->name('job.category');
Route::post('job/category/create', [JobCategoryController::class, 'store'])->name('category.create');
Route::post('job/delete/{id}',[JobController::class,'destroy'])->name('job.delete');

Route::get('job/archive',[JobController::class,'archive'])->name('job.archive');

//User Controller
//Route::get('/admin/dashboard',[App\Http\Controllers\UserController::class,'index'])->name('admin.dashboard');
Route::get('user/login',[App\Http\Controllers\UserController::class,'showForm'])->name('user.login');
Route::post('user/login/proceed',[App\Http\Controllers\UserController::class,'login'])->name('user.login.proceed');
//Route for Admin

Route::post('/logout',[App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function () {
    Route::get('/dashboard',[App\Http\Controllers\UserController::class,'index'])->name('admin.dashboard');



});
//subscription route
Route::resource('sub', SubscriptionController::class);

