<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{users}', [UserController::class, 'destroy'])->name('users.destroy');


// Retornar Texto
Route::get('saludar', function (){
   return 'Hola Sergio';
});

// Ruta view util para paginas estaticas
Route::view('welcome', 'web.home.index', [
    'login' => 'gnujavasergio',
    'name' => 'Sergio Ochoa Martinez',
    'email' => 'gnu.java.sergio@gmail.com'
]);

Route::resource('categories', CategoryController::class);
