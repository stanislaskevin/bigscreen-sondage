<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SondageController;
use App\Http\Controllers\Api\AuthController;

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

// Api/login
Route::post('/login', [AuthController::class, 'login']);

// Api/admin
Route::middleware(['auth'])->group(function () {
    Route::get('/sondage/questionnaires', [SondageController::class, 'index']);
    Route::get('/sondage/reponses', [SondageController::class, 'index']);
});

// Api/sondage
Route::post('/sondage', [SondageController::class, 'new']);

// Api/demo
Route::get('/sondage/reponses', [SondageController::class, 'index']);
Route::get('/sondage/reponses/{id}', [SondageController::class, 'show']);
