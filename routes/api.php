<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengajuanController;

use App\Http\Controllers\PendaftarController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::post('/register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('me', [AuthController::class,'me']);
// });
// tes

Route::get('/showPengajuan', [PengajuanController::class,'index']);
Route::get('/createpengajuan',[PengajuanController::class,'tambah']);
Route::post('/showPengajuan', [PengajuanController::class,'store']);
Route::get('/editrole{ID_ROLE}',[PengajuanController::class,'edit']);
Route::post('/ubahPengajuan', [PengajuanController::class,'update']);
Route::post('/deletePengajuan', [PengajuanController::class,'destroy']);
Route::get('/accept', [PengajuanController::class,'accept']);
Route::get('/decline', [PengajuanController::class,'decline']);

Route::get('/showLogbook', [LogbookController::class,'index']);
Route::get('/createlogbook',[LogbookController::class,'tambah']);
Route::post('/showLogbook', [LogbookController::class,'store']);
Route::get('/editrole{ID_ROLE}',[LogbookController::class,'edit']);
Route::post('/ubahLogbook', [LogbookController::class,'update']);
Route::post('/deleteLogbook', [LogbookController::class,'destroy']);
