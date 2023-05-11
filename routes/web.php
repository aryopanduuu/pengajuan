<?php

use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\fullCalenderController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
});
Route::post('/register', [AuthController::class, 'register']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', [AuthController::class, 'logout']);

//USERVIEW

Route::get('/indexuser', function () {
    return view('users.indexusers');
});



// ADD TO GITHUB

Route::get('/showPengajuan', [PengajuanController::class, 'index']);
Route::post('/createPengajuan', [PengajuanController::class, 'store']);
Route::post('/ubahPengajuan', [PengajuanController::class, 'update']);
Route::post('/deletePengajuan', [PengajuanController::class, 'destroy']);

Route::post('/auth/login', function () {

    $email = 'UserAgent';
    $pass = 'pass';

    // // checkuserpass
    $msg = '';

    // if('passsalah'){
    //     $msg="Password Salah";
    // }

    // if('passsalah'){
    //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
    // }

    // if('passsalah'){
    //     return view("login",['status'=>true,'msg'=>"Password Salah"]);
    // }
    // return view("login",['status'=>true,'msg'=>$msg]);

    // if("")

});

Route::get('/rekap1', [PendaftarController::class, 'indexAdmin']);
Route::get('/decline', [PendaftarController::class, 'decline']);
Route::get('/accept', [PendaftarController::class, 'accept']);
Route::get('/change-status/{ID_PENDAFTAR}', [PendaftarController::class, 'changeStatus']);

Route::get('/rekap1', [AdminController::class, 'getRead']);

Route::get('/cekPengajuan', function () {
    return view('/users/cekPengajuan');
});
/**admin */

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/rekapdata1', [AdminController::class, 'getreadpendaftar']);
Route::get('/admin/rekapdata2', [AdminController::class, 'getreadpengajuan']);
Route::get('/admin/accept1', [AdminController::class, 'getReadAccept1']);
Route::get('/admin/accept2', [AdminController::class, 'getReadAccept1']);
Route::get('/admin/logbook', [AdminController::class, 'getReadlogbook']);

Route::get('fullCalender', [fullCalenderController::class, 'index']);
Route::post('fullCalender', [fullCalenderController::class, 'action']);

/** user */
Route::get('/users/logbook', [LogbookController::class, 'index']);
Route::get('/users/tambahlogbook', [LogbookController::class, 'tambah']);
Route::post('/store', [LogbookController::class, 'store']);
Route::get('/users/editlogbook{id}', [LogbookController::class, 'edit']);
Route::post('logbook/update', [LogbookController::class, 'update']);


/**admin */

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/rekapdata1', [AdminController::class, 'getreadpendaftar']);
Route::get('/admin/rekapdata2', [AdminController::class, 'getreadpengajuan']);
Route::get('/admin/accept1', [AdminController::class, 'getReadAccept1']);
Route::get('/admin/accept2', [AdminController::class, 'getReadAccept1']);
Route::get('/admin/logbook', [AdminController::class, 'getReadlogbook']);

Route::get('fullCalender', [fullCalenderController::class, 'index']);
Route::post('fullCalender', [fullCalenderController::class, 'action']);

/** user */
Route::get('/users/logbook', [LogbookController::class, 'index']);
Route::get('/users/tambahlogbook', [LogbookController::class, 'tambah']);
Route::post('/store', [LogbookController::class, 'store']);
Route::get('/users/editlogbook{id}', [LogbookController::class, 'edit']);
Route::post('logbook/update', [LogbookController::class, 'update']);

// Tahap 1
Route::get('/users/pendaftaran', [PendaftarController::class, 'show']);
Route::post('/Pendaftar/store', [PendaftarController::class, 'store']);
Route::get('/users/cekTahap1', [PendaftarController::class, 'index']);

// Tahap 2
Route::get('/users/pengajuan', [PengajuanController::class, 'show']);
Route::post('/pengajuan/store', [PengajuanController::class, 'store']);
Route::get('/users/cekTahap2', [PengajuanController::class, 'index']);
