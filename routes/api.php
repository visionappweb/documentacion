<?php

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

Route::prefix('universitario')->group(function () {
    Route::prefix('estudiantes')->group(function () {
        Route::get('estudiantes', [\App\Http\Controllers\EstudianteController::class, 'index']);
        Route::get('estudiante', [\App\Http\Controllers\EstudianteController::class, 'searchWhereId']);
        Route::post('estudiante', [\App\Http\Controllers\EstudianteController::class, 'store']);
    });

    Route::prefix('profesores')->group(function () {
        Route::get('profesor', [\App\Http\Controllers\ProfesorController::class, 'searchWhereId']);
        Route::post('profesor', [\App\Http\Controllers\ProfesorController::class, 'store']);
    });
});
