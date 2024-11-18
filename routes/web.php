<?php
use App\Http\Controllers\Admin;
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
    return view('welcome');
});



Route::get('dashboard', [Admin::class, 'index']);
Route::get('/siswa', [Admin::class, 'Siswa']);
Route::get('/tambah', [Admin::class, 'tambahSiswa']);
Route::post('simpan',[Admin::class,'simpanSiswa']);
Route::get('/hapus/{id}',[Admin::class, 'hapusSiswa'])->name('siswa.hapus');
Route::get('/edit/{id}',[Admin::class, 'EditSiswa'])->name('siswa.edit');
Route::put('/update/{id}',[Admin::class,'updateSiswa'])->name('siswa.update');

