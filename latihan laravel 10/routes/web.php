<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
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

 
Route::get('/', function () {
    return view('welcome');
}); 
*/

Route::get('/',[KelasController::class, 'index'])->name('kelas.index');

Route::get('/siswa',[SiswaController::class, 'index'])->name('kelas.siswa');

Route::get('/mapel',[MapelController::class, 'index'])->name('kelas.mapel');

Route::get('/guru',[GuruController::class, 'index'])->name('kelas.guru');

Route::post('/insertdatakelas',[KelasController::class, 'insertdata'])->name('insertdata');
Route::post('/insertdata',[SiswaController::class, 'insertdata'])->name('insertdata');
Route::post('/insertdatamapel',[MapelController::class, 'insertdata'])->name('insertdata');
Route::post('/insertdataguru',[GuruController::class, 'insertdata'])->name('insertdata');

Route::get('/editdatakelas/{id}',[KelasController::class, 'editdata'])->name('editdata');
Route::get('/editdata/{id}',[SiswaController::class, 'editdata'])->name('editdata');
Route::get('/editdatamapel/{id}',[MapelController::class, 'editdata'])->name('editdata');
Route::get('/editdataguru/{id}',[GuruController::class, 'editdata'])->name('editdata');

Route::post('/updatedatakelas/{id}',[KelasController::class, 'updatedata'])->name('updatedata');
Route::post('/updatedata/{id}',[SiswaController::class, 'updatedata'])->name('updatedata');
Route::post('/updatedatamapel/{id}',[MapelController::class, 'updatedata'])->name('updatedata');
Route::post('/updatedataguru/{id}',[GuruController::class, 'updatedata'])->name('updatedata');

Route::get('/deletekelas/{id}',[KelasController::class, 'delete'])->name('delete');
Route::get('/delete/{id}',[SiswaController::class, 'delete'])->name('delete');
Route::get('/deletemapel/{id}',[MapelController::class, 'delete'])->name('delete');
Route::get('/deleteguru/{id}',[GuruController::class, 'delete'])->name('delete');
