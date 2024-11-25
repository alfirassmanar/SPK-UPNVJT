<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\AnalisisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/data-guru', [MasterController::class, 'dataGuru'])->name('dataGuru');
Route::get('/data-guru/Tambah', [MasterController::class, 'tdataGuru'])->name('tdataGuru');
Route::get('/data-guru/Update', [MasterController::class, 'udataGuru'])->name('udataGuru');
Route::get('/data-guru/Hapus', [MasterController::class, 'hdataGuru'])->name('hdataGuru');

Route::get('/data-kriteria', [MasterController::class, 'dataKriteria'])->name('dataKriteria');
Route::get('/data-kriteria/Tambah', [MasterController::class, 'tdataKriteria'])->name('tdataKriteria');
Route::get('/data-kriteria/Update', [MasterController::class, 'udataKriteria'])->name('udataKriteria');
Route::get('/data-kriteria/Hapus', [MasterController::class, 'hdataKriteria'])->name('hdataKriteria');


Route::get('/data-peridoe', [MasterController::class, 'dataPeriode'])->name('dataPeriode');

Route::get('/penilaian-kriteria', [AnalisisController::class, 'pKriteria'])->name('pKriteria');

Route::get('/Bobot-kriteria', [AnalisisController::class, 'bKriteria'])->name('bKriteria');
Route::get('/Tambah-bKriteria', [AnalisisController::class, 'tData_bKriteria'])->name('tData_bKriteria');
Route::get('/Update-bKriteria', [AnalisisController::class, 'uData_bKriteria'])->name('uData_bKriteria');

Route::get('/analisis-penilaian', [AnalisisController::class, 'aPenilaian'])->name('aPenilaian');