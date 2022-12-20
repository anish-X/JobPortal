<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
    return view('admin.index');
});

Route::get('/company/create',[CompanyController::class, 'create'])->name('company.create');
Route::post('/company/save',[CompanyController::class, 'save'])->name('company.save');
Route::resource('sub', SubscriptionController::class);
// ('/sub',[SubscriptionController::class, 'create'])->name('subscription');

