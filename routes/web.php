<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('estudiantes', [StudentController::class, 'index'])->name('estudiantes.index');

/** este llama a los 7 metodos */
Route::resource('estudiantes', StudentController::class);

Route::get('estudiantes/create', [StudentController::class, 'create'])->name('estudiantes.create');
Route::post('estudiantes/create', [StudentController::class, 'store'])->name('estudiantes.store');

Route::get('estudiantes/edit/{id}', [StudentController::class, 'edit'])->name('estudiantes.edit');
Route::put('estudiantes/edit/{id}', [StudentController::class, 'update'])->name('estudiantes.update');

Route::get('estudiantes/show/{id}', [StudentController::class, 'show'])->name('estudiantes.show');
Route::delete('estudiantes/destroy/{id}', [StudentController::class, 'destroy'])->name('estudiantes.destroy');


Route::get('home', function () {
    return view('home');
});
