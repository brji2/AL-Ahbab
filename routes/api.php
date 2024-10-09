<?php

use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\api\StudentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthApiController::class, 'logout']);


Route::group(['prefix' => 'students', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [StudentApiController::class, 'index']);
    Route::post('/store', [StudentApiController::class, 'store']);
    Route::put('/update/{student}', [StudentApiController::class, 'update']);
    Route::delete('/destroy/{student}', [StudentApiController::class, 'destroy']);
});
