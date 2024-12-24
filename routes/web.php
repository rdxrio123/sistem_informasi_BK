<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Achievement;
use App\Http\Controllers\CaseReport;
use App\Http\Controllers\ClassData;
use App\Http\Controllers\DataClass;
use App\Http\Controllers\PointCategory;
use App\Http\Controllers\ParentStudent;
use App\Http\Controllers\DataPoint;
use App\Http\Controllers\Student;
use App\Http\Controllers\Achievements;
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
//Routes Siswa 
Route::get('template', [Admin::class, 'index']);
Route::get('siswa', [Admin::class, 'Siswa'])->name('siswa.tampil');
Route::get('/tambah', [Admin::class, 'tambahSiswa']);
Route::post('simpan', [Admin::class, 'simpanSiswa']);
Route::get('/hapus/{id}', [Admin::class, 'hapusSiswa']);
Route::get('/edit/{id}', [Admin::class, 'editSiswa'])->name('siswa.edit');
Route::post('/update/{id}', [Admin::class, 'updateSiswa']);

//Routes Class
Route::get('kelas', [DataClass::class, 'classData'])->name('kelas.tampil');
Route::get('tambahkelas', [DataClass::class, 'addClass']);
Route::post('simpankelas', [DataClass::class, 'storeClass']);
Route::get('hapuskelas/{id}', [DataClass::class, 'destroyClass']);
Route::get('/editkelas/{id}', [DataClass::class, 'editClass']);
Route::post('/updatekelas/{id}', [DataClass::class, 'updateClass']);

//Route Parents
Route::get('ortu', [ParentStudent::class, 'parentData'])->name('ortu.tampil');
Route::get('tambahparent', [ParentStudent::class, 'addParent']);
Route::post('simpanparent', [ParentStudent::class, 'storeParent']);
Route::get('hapusparent/{id}', [ParentStudent::class, 'destroyParent']);
Route::get('/editparent/{id}', [ParentStudent::class, 'editParent']);
Route::post('/updateparent/{id}', [ParentStudent::class, 'updateParent']);

//Route Points
Route::get('point', [DataPoint::class, 'dataPoint'])->name('point.tampil');
Route::get('tambahpoint', [DataPoint::class, 'createPoint']);
Route::post('simpanpoint', [DataPoint::class, 'storePoint']);
Route::get('hapuspoint/{id}', [DataPoint::class, 'destroyPoint']);
Route::get('/editpoint/{id}', [DataPoint::class, 'editPoint']);
Route::post('/updatepoint/{id}', [DataPoint::class, 'updatePoint']);

//Route Points Category
Route::get('kategori', [PointCategory::class, 'indexPointCategory'])->name('kategori.tampil');
Route::get('tambahkategori', [PointCategory::class, 'createPointCategory']);
Route::post('simpankategori', [PointCategory::class, 'storePointCategory']);
Route::get('hapuskategori/{id}', [PointCategory::class, 'destroyPointCategory']);
Route::get('/editkategori/{id}', [PointCategory::class, 'editPointCategory']);
Route::post('/updatekategori/{id}', [PointCategory::class, 'updatePointCategory']);

//Route Case Report
Route::get('studykasus', [CaseReport::class, 'indexCaseReport'])->name('studykasus.tampil');
Route::get('tambahstudykasus', [CaseReport::class, 'createCaseReport']);
Route::post('simpanstudykasus', [CaseReport::class, 'storeCaseReport']);
Route::get('hapusstudykasus/{id}', [CaseReport::class, 'destroyCaseReport']);
Route::get('/editstudykasus/{id}', [CaseReport::class, 'editCaseReport']);
Route::post('/updatestudykasus/{id}', [CaseReport::class, 'updateCaseReport']);

//Route Achievement
Route::get('dataprestasi', [Achievements::class, 'indexAchievement'])->name('dataprestasi.tampil');
Route::get('tambahprestasi', [Achievements::class, 'createAchievement']);
Route::post('simpanprestasi', [Achievements::class, 'storeAchievement']);
Route::get('hapusprestasi/{id}', [Achievements::class, 'destroyAchievement']);
Route::get('/editprestasi/{id}', [Achievements::class, 'editAchievement']);
Route::post('/updateprestasi/{id}', [Achievements::class, 'updateAchievement']);
