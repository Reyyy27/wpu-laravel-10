<?php

use App\Http\Controllers\KelasController;
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

Route::post('/insertdata',[KelasController::class, 'insertdata'])->name('insertdata');
Route::post('/insertdata',[SiswaController::class, 'insertdata'])->name('insertdata');

Route::get('/editdata/{id}',[KelasController::class, 'editdata'])->name('editdata');
Route::get('/editdata/{id}',[SiswaController::class, 'editdata'])->name('editdata');

Route::post('/updatedata/{id}',[KelasController::class, 'updatedata'])->name('updatedata');
Route::post('/updatedata/{id}',[SiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[KelasController::class, 'delete'])->name('delete');
Route::get('/delete/{id}',[SiswaController::class, 'delete'])->name('delete');