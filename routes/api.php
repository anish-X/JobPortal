<?php

use App\Http\Controllers\API\Usercontroller;
use App\Http\Controllers\API\UserController as APIUserController;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::get('login',[UserController::class,"login"]);
Route::get('sub',[\App\Http\Controllers\API\SubsriptionController::class,'show']);
Route::get('sub/store',[\App\Http\Controllers\API\SubsriptionController::class,'store']);
Route::post('sub/update',[\App\Http\Controllers\API\SubsriptionController::class,'update']);


 Route::apiResource("sub",\App\Http\Controllers\API\SubsriptionController::class);
 Route::apiResource('comsub',App\Http\Controllers\API\CompanySubscriptionController::class);

// Route::apiResource('sub',[\App\Http\Controllers\API\SubsriptionController::class,]);








































