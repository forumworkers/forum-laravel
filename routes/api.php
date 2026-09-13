<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\PostFreeController;



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

// para los json y ajax se tiene que usar ruta api, si no devuelve una vista
// cuando se usa la funcion ->name('devuelve html')
// Route::get('/members/ignored/{id}', [MemberController::class, 'ignored']);

// Route::get('/members/dignored/{id}', [MemberController::class, 'dignored']);

Route::get('/users/map', [HomeController::class, 'mapall']);

// Route::get('/find/post', [HomeController::class, 'findPost']);

Route::post('/find/post', [HomeController::class, 'findPost']);

Route::get('/find/category', [PostFreeController::class, 'findCategory']);
