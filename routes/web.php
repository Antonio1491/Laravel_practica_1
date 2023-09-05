<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros'); //contenido estático

Route::get('contactanos', function () {
  $correo = new ContactanosMailable;
  Mail::to('antonio.gongora1491@gmail.com')->send($correo);

  return "mensaje enviado";
});

// Rutas en grupo
// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index');
//     Route::get('cursos/create', 'create');
//     Route::get('cursos/{curso}', 'show');
// });