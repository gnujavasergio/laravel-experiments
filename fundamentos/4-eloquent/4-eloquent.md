## Collections
- Las conlecciones son una pequeña extension de eloquent que te permiten manipular facilmente los datos.
```injectablephp
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
```
## Serialization
- Es la forma como presentamos estos datos ya sea en array o en json
```injectablephp
Route::get('users/serialization', function () {
    $users = User::all();
    // dd($users->toArray()); // Convertir a un array
    $user = $users->find(1);
    // dd($user); // Objecto
    dd($user->toJson()); // Json
});
```

## Get and set eloquent
- Podemos modificar 
