<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\vehiclelistController;
use App\Http\Controllers\Api\UserController;
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

Route::get('/vehicle',[vehiclelistController::class, 'index']);
Route::get('/vehicle/{id}', [vehiclelistController::class, 'show']);
Route::delete('/vehicle/{id}', [vehiclelistController::class, 'destroy']);
Route::post('/vehicle',[vehiclelistController::class, 'store']);
Route::put('/vehicle/{id}',[vehiclelistController::class, 'update']);

Route::get('/user',[UserController::class, 'index']);
Route::DELETE('/user/{id}',[UserController::class, 'destroy']);
Route::get('/user/{id}',[UserController::class, 'show']);
Route::post('/user',[UserController::class, 'store']);
Route::put('/user/{id}',[UserController::class, 'update']);

Route::post('/user',[UserController::class, 'store'])->name('user.store'); 
Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}',[UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}',[UserController::class, 'password'])->name('user.password');
