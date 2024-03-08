<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\PlantsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('dummy', [dummyApi::class, 'index']);

//retrieve data from database

Route::get('animals', [AnimalController::class, 'index']);
Route::get('plants', [PlantsController::class, 'index']);


//store data in database
Route::post('/animals', [AnimalController::class, 'store']);
Route::post('/plants', [PlantsController::class, 'store']);
