<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\vehiclelistController;
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

//Public APIs
Route::post('login', [AuthController::class, 'login'])->name('user.login');
// Route::post('user', [UserController::class, 'store'])->name('user.store');

//Private APIs
Route::middleware(['auth:sanctum'])->group(function () {
Route::post('/logout', [AuthController::class, 'logout']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware(['auth:sanctum'])->group(function () {
// 	Route::post('/logout', [AuthController::class, 'logout']);

// Route::controller(AuthController::class)->group(function (){
// 	Route::post('/login', 'login')->name('user.login');
// 	Route::post('/logout', 'logout');
// });

Route::post('/login', [AuthController::class, 'login'])->name('user.login')->name('user.login');
Route::post('/user',	[UserController::class, 'store'])->name('user.store');


Route::controller(UserController::class)->group(function (){
	Route::get('/user',									'index');
	Route::get('/user/{id}',						  	'show');
	Route::put('/user/{id}', 'update')->name(		  	'user.update');
	Route::put('/user/email/{id}',	'email')->name(	  	'user.email');
	Route::put('/user/password{id}','password')->name(	'user.password');
	Route::delete('/user/{id}',							'destroy');
});
	
Route::controller(vehiclelistController::class)->group(function (){
	Route::get('/vehicle', 			'index');
	Route::get('/vehicle/{id}', 	'show');
	Route::post('/vehicle', 		'store');
	Route::put('/vehicle/{id}', 	'update');
	Route::delete('/vehicle/{id}', 	'destroy');
});
// Route::get('/vehicle',[vehiclelistController::class, 'index']);
// Route::get('/vehicle/{id}', [vehiclelistController::class, 'show']);
// Route::delete('/vehicle/{id}', [vehiclelistController::class, 'destroy']);
// Route::post('/vehicle',[vehiclelistController::class, 'store']);
// Route::put('/vehicle/{id}',[vehiclelistController::class, 'update']);

// Route::get('/user',[UserController::class, 'index']);
// Route::DELETE('/user/{id}',[UserController::class, 'destroy']);
// Route::get('/user/{id}',[UserController::class, 'show']);
// Route::post('/user',[UserController::class, 'store']);
// Route::put('/user/{id}',[UserController::class, 'update']);

// Route::post('/user',[UserController::class, 'store'])->name('user.store'); 
// Route::put('/user/{id}',[UserController::class, 'update'])->name('user.update');
// Route::put('/user/email/{id}',[UserController::class, 'email'])->name('user.email');
// Route::put('/user/password/{id}',[UserController::class, 'password'])->name('user.password');
});