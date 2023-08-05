<?php

use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\OtherController;
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

/*Auth Routes*/
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

/*Country States and Cities*/
Route::get('countries', [OtherController::class, 'getCountries']);
Route::get('states/{id}', [OtherController::class, 'getStates']);
Route::get('cities/{id}', [OtherController::class, 'getCities']);

/*Application Form Routes*/
Route::post('application/add',    [ApplicationController::class, 'store']);

/*Admin Routes*/
Route::middleware(['auth:api', 'verified'])->group(function () {

    Route::get('dashboard', [OtherController::class, 'dashboard']);
    /*Export all applications*/
    Route::get('export-applications', [ApplicationController::class, 'exportApplications']);

    /*Routes for facilities departments and positions*/
    Route::apiResource('facilities', FacilityController::class);
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('positions', PositionController::class);
});
