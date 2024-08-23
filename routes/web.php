<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

//fuones de rutas de tipo get
//esta es un funcion que muestra una vista 
//cuando en la url nos ubicaomos en la raiz  '\'
//ñas vistas se encuentran en la carpeta resourcer/view
// Route::get('/', function () {
//     return view('welcome');
// });
//la funcion anterior tambien puede ser de la siguiente manera:
// 
//array y mandejo de variables
/* $post=[
    ['title'=>'Primer post'],
    ['title'=>'Segundo post'],
    ['title'=>'Tecer post'],
    ['title'=>'Cuarto post'],
    ['title'=>'Quinto post']
]; */
route::view('/','welcome')->name('home');
route::view('contacto','contact')->name('contact');
// route::view('blog','blog',['posts'=>$post])->name('blog');
//otra forma de pasar variables array
route::get('blog',[PostController::class,'index']) -> name('posts.index');

route::get('/blog/create',[PostController::class,'create'])->name('posts.create');

route::post('/blog',[PostController::class,'store'])->name('posts.store');

route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');
route::get('/blog/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
route::patch('/blog/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('/blog/{post}',[PostController::class,'delete'])->name('posts.delete');
//para mantner un orden es recomendale usar CONTROLADORES

route::view('nosotros','about')->name('about');


//otras rutas de tipo
// Route::post();
// Route::patch();
// Route::put();
// Route::delete();
// Route::options();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
