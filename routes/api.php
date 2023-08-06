<?php

use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\FacilityController;
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

/*Application Form Routes*/
Route::post('application/add',    [ApplicationController::class, 'store']);
Route::post('/closest-facilities', [FacilityController::class, 'getClosestFacilities']);

/*Admin Routes*/
Route::middleware(['auth:api', 'verified'])->group(function () {

    /*export all applications*/
    Route::get('export-applications', [ApplicationController::class, 'exportApplications']);

    /*Routes for Facility*/
        Route::apiResource('facilities', FacilityController::class);

    /*Routes for Department*/
        Route::apiResource('departments', DepartmentController::class);
        
    /*Routes for Position*/
        Route::apiResource('positions', PositionController::class);
    
    /*Routes for Application*/
    Route::get('all-applications',    [ApplicationController::class, 'index']);
    
});
