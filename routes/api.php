<?php

use App\Http\Controllers\BeatController;
use App\Http\Controllers\PostController;
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
Route::post('/posts/{post}/like', [PostController::class,'likePost']);
Route::post('/beats/{beat}/like', [BeatController::class, 'likeBeat']);
Route::post('/beats', [BeatController::class,'store']);
Route::post('/posts', [PostController::class,'store']);
Route::get('/posts', [PostController::class,'index']);

