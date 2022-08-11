<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'store'])->name('users.store')->middleware('verify-age');
Route::delete('users/{users}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('guidelines', function () {
    return view('admin.users.guidelines');
})->name('guidelines');

// Retornar Texto
Route::get('saludar', function () {
    return 'Hola Sergio';
});

// Ruta view util para paginas estaticas
Route::view('welcome', 'web.home.index', [
    'login' => 'gnujavasergio',
    'name' => 'Sergio Ochoa Martinez',
    'email' => 'gnu.java.sergio@gmail.com'
]);


Route::resource('categories', CategoryController::class);

Route::get("posts", function () {
    $posts = Post::all();
    foreach ($posts as $post) {
        echo "$post->id $post->title <br>";
    }
});

Route::get("posts/query", function () {
    $posts = Post::where('id', '>=', '20')
        ->orderBy('id', 'desc') // Ordenar
        ->take(3) // Obtener un dterminado de elementos
        ->get();
    foreach ($posts as $post) {
        echo "$post->id $post->title <br>";
    }
});

Route::get('posts/relations', function () {
    echo '<pre>';
    $posts = Post::get();
    foreach ($posts as $post) {
        echo "$post->id <strong>{$post->user->name}</strong> $post->title <br>";
    }
});


Route::get('users/relations', function () {
    $users = User::get();
    foreach ($users as $user) {
        echo "$user->id <strong>$user->name</strong> {$user->posts->count()} posts <br>";
        echo "---------------<br>";
        echo "$user->fullname <br>";
    }
});

Route::get('users/collections', function () {
    $users = User::all();
    // dd($users); // Mostrar toda la coleccion
    // dd($users->contains(10)); // Contiene 10 elementos -> true
    // dd($users->take(2)); // Obtener solo 2 elementos
    // dd($users->except([1, 2, 3, 4, 5, 6, 7])); // Solo de devuelve los ultimos ids
    // dd($users->only([10])); // Solo me devuelve el id o ids que quiero
    // dd($users->find(4)); // Buscar un id en especifico
    dd($users->load('posts')); // Cargar las relaciones
});

Route::get('users/serialization', function () {
    $users = User::all();
    // dd($users->toArray()); // Convertir a un array
    $user = $users->find(1);
    // dd($user); // Objecto
    dd($user->toJson()); // Json
});
