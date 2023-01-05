<?php

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\CompanyCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    
    //company category controller
    Route::get("/companycategory/index",[CompanyCategoryController::class,'index']);
    Route::get("/companycategory/store",[CompanyCategoryController::class,'store']);
    Route::get("/companycategory/show/{id}",[CompanyCategoryController::class,'show']);
    Route::post("/companycategory/update/{id}",[CompanyCategoryController::class,'update']);
    Route::post("/companycategory/delete/{id}",[CompanyCategoryController::class,'destroy']);

    //company controller
    Route::get("/company/index",[CompanyController::class,'index']);
    Route::get("/company/create",[CompnayController::class,'create']);

    // Route::apiResource('/companyCategory',[CompanyCategoryController::class]);

    //user controller
    Route::post("/login",[UserController::class,'login']);
    Route::get('/me',[UserController::class,'user']);

});





// Route::get('/me',[UserController::class,'user'])->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//User Controller using API
Route::post("/register",[UserController::class,'register']);


