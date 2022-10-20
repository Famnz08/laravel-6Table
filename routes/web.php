<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupllierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksidetailController;

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
    return view('welcome');
});

//Admin
Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'create']);
Route::post('/admin/store', [AdminController::class,'store']);
Route::get('/admin/edit/{id}', [AdminController::class,'edit']);
Route::put('/admin/update/{id}', [AdminController::class,'update']);
Route::get('/admin/destroy/{id}', [AdminController::class,'destroy']);

//suplier
Route::get('/supllier', [SupllierController::class,'index']);
Route::get('/supllier/tambah', [SupllierController::class,'create']);
Route::post('/supllier/store', [SupllierController::class,'store']);
Route::get('/supllier/edit/{id}', [SupllierController::class,'edit']);
Route::put('/supllier/update/{id}', [SupllierController::class,'update']);
Route::get('/supllier/destroy/{id}', [SupllierController::class,'destroy']);

//trx
Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'create']);
Route::post('/transaksi/store', [TransaksiController::class,'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class,'edit']);
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update']);
Route::get('/transaksi/destroy/{id}', [TransaksiController::class,'destroy']);

//jenis

Route::get('/jenis', [JenisController::class,'index']);
Route::get('/jenis/tambah', [JenisController::class,'create']);
Route::post('/jenis/store', [JenisController::class,'store']);
Route::get('/jenis/edit/{id}', [JenisController::class,'edit']);
Route::put('/jenis/update/{id}', [JenisController::class,'update']);
Route::get('/jenis/destroy/{id}', [JenisController::class,'destroy']);

//barang


Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'create']);
Route::post('barang/store', [BarangController::class,'store']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);
Route::get('/barang/destroy/{id}', [BarangController::class,'destroy']);

//trx d
Route::get('/transaksidetail/detail/{id}', [TransaksidetailController::class,'index']);
Route::get('/transaksidetail/edit/{id}', [TransaksidetailController::class,'edit']);
Route::put('/transaksidetail/update/{id}', [TransaksidetailController::class,'update']);
Route::get('/transaksidetail/destroy/{id}', [TransaksidetailController::class,'destroy']);
