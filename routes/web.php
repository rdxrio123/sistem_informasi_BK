<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Achievement;
use App\Http\Controllers\CaseStudy;
use App\Http\Controllers\ClassData;
use App\Http\Controllers\DataPointCategory;
use App\Http\Controllers\Parents;
use App\Http\Controllers\PointData;
use App\Http\Controllers\Student;
use Illuminate\Support\Facades\Route;

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
    return view('template');
});



Route::get('template', [Admin::class, 'index']);
Route::get('/siswa', [Admin::class, 'Siswa']);
Route::get('/tambah', [Admin::class, 'tambahSiswa']);
Route::post('simpan', [Admin::class, 'simpanSiswa']);
Route::get('/hapus/{id}', [Admin::class, 'hapusSiswa'])->name('siswa.hapus');
Route::get('/edit/{id}', [Admin::class, 'editSiswa'])->name('siswa.edit');
Route::put('/update/{id}', [Admin::class, 'updateSiswa'])->name('Siswa.update');
