<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\SongController;

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

Route::post('login',[LoginController::class,'login']);
Route::GET('recentsongs',[SongController::class,'recentsong']);
Route::GET('currentsongs',[SongController::class,'currentsong']);
Route::GET('oldsongs',[SongController::class,'oldsong']);
Route::GET('musicdirectors',[SongController::class,'recentsong']);
Route::GET('musiccategories',[SongController::class,'musiccategories']);
Route::GET('demotionsongs',[SongController::class,'demotionsong']);

Route::GET('searchsong/{songname}',[SongController::class,'searchsong']);

Route::POST('Likesong',[SongController::class,'Likesong']);
Route::POST('dedicatesong',[SongController::class,'dedicatesong']);


