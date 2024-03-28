<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\UserController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login',[AuthController::class,'login']);

Route::post('register',[AuthController::class, 'register']);

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


// Profile's Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/profile', [ProfileController::class, 'storeOrUpdate'])->name('profile.storeOrUpdate');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
});

Route::get('profile', [ProfileController::class, 'show']); //muestra todos los perfiles
Route::get('profile/{user_id}', [ProfileController::class, 'getById']); // perfil especifico.

