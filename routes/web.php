<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenyewaanController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    
    //Customer
    Route::get('customers', [CustomerController::class, 'index']);
    Route::get('customers/create', [CustomerController::class, 'create']);
    Route::get('customers/edit/{id}', [CustomerController::class, 'edit']);
    Route::post('customers/delete/{id}', [CustomerController::class, 'destroy']);
    Route::post('customers', [CustomerController::class, 'store']);
    Route::post('customers/update/{id}', [CustomerController::class, 'update']);

    //Barang
    Route::get('barang', [BarangController::class, 'index']);
    Route::get('barang/create', [BarangController::class, 'create']);
    Route::get('barang/edit/{id}', [BarangController::class, 'edit']);
    Route::post('barang/delete/{id}', [BarangController::class, 'destroy']);
    Route::post('barang', [BarangController::class, 'store']);
    Route::post('barang/update/{id}', [BarangController::class, 'update']);

    //Merk
    Route::get('merk', [MerkController::class, 'index']);
    Route::get('merk/create', [MerkController::class, 'create']);
    Route::get('merk/edit/{id}', [MerkController::class, 'edit']);
    Route::post('merk/delete/{id}', [MerkController::class, 'destroy']);
    Route::post('merk', [MerkController::class, 'store']);
    Route::post('merk/update/{id}', [MerkController::class, 'update']);

    //Mobil
    Route::get('mobil', [MobilController::class, 'index']);
    Route::get('mobil/create', [MobilController::class, 'create']);
    Route::get('mobil/edit/{id}', [MobilController::class, 'edit']);
    Route::get('mobil/show/{id}', [MobilController::class, 'show']);
    Route::post('mobil/delete/{id}', [MobilController::class, 'destroy']);
    Route::post('mobil', [MobilController::class, 'store']);
    Route::post('mobil/update/{id}', [MobilController::class, 'update']);

    //Penyewaan
    Route::get('penyewaan', [PenyewaanController::class, 'index']);
    Route::get('penyewaan/create', [PenyewaanController::class, 'create']);
    Route::get('penyewaan/edit/{id}', [PenyewaanController::class, 'edit']);
    Route::get('penyewaan/show/{id}', [PenyewaanController::class, 'show']);
    Route::post('penyewaan/delete/{id}', [PenyewaanController::class, 'destroy']);
    Route::post('penyewaan', [PenyewaanController::class, 'store']);
    Route::post('penyewaan/update/{id}', [PenyewaanController::class, 'update']);

    //Laporan
    Route::get('laporan', [LaporanController::class, 'index']);
    Route::get('laporan/print', [LaporanController::class, 'print']);

    Route::post('/logout', [AuthController::class, 'logout']);

});