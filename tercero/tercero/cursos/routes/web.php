<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
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

// Route::get('/info', [TestController::class,'info'])->name('info');
// Route::post('/info', [TestController::class,'store'])->name('info');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cursos',[CursosController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/create',[CursosController::class, 'create'])->name('cursos.create');
    Route::post('/cursos/store',[CursosController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/edit/{cur_id}',[CursosController::class, 'edit'])->name('cursos.edit');
    Route::post('/cursos/update/{cur_id}',[CursosController::class, 'update'])->name('cursos.update');
    Route::post('/cursos/destroy/{cur_id}',[CursosController::class, 'destroy'])->name('cursos.destroy');

});

require __DIR__.'/auth.php';
