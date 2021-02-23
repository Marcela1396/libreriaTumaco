<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\LibroController;

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

Route::get('/', [Inicio::class , 'index']);

// Libros
Route::get('/libros', [LibroController::class , 'index'])->name('listado_libros');
Route::get('/libros/registro', [LibroController::class , 'form_registro'])->name('formularioRegLibro');
Route::post('/libros/registro', [LibroController::class , 'registrar'])->name('registrar');
Route::get('/libros/actualiza/{id}', [LibroController::class , 'form_actualiza'])->name('formularioAct');
Route::post('/libros/actualiza/{id}', [LibroController::class , 'actualizar'])->name('actualizar');

// Editorial
Route::get('/editorial', [EditorialController::class , 'index'])->name('listado_editoriales');
Route::get('/editorial/registro', [EditorialController::class , 'form_registro'])->name('formularioReg');
Route::post('/editorial/registro', [EditorialController::class , 'registrar'])->name('registrarEditorial');
Route::get('/editorial/actualiza/{id}', [EditorialController::class , 'form_actualiza'])->name('formEditorial');
Route::post('/editorial/actualiza/{id}', [EditorialController::class , 'actualizar'])->name('actualizarEditorial');

