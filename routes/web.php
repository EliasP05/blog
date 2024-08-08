<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//esta es un funcion que muestra una vista cuando en la url nos ubicaomos en la raiz  '\'
Route::get('/', function () {
    return view('welcome');
});
//la funcion anterior tambien puede ser de la siguiente manera:
// route::view('/','welcome');
route::view('/','nosotros');
route::view('/','about');
route::view('/','contacto');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
