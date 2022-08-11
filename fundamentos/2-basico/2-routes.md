## Routes
- Para listar ruta 
```bash
php artisan route:list
php artisan route:clear
```

- Para manejar vista estaticas con algunos parametros
```injectablephp
Route::view('welcome', 'web.home.index', [
    'login' => 'gnujavasergio',
    'name' => 'Sergio Ochoa Martinez',
    'email' => 'gnu.java.sergio@gmail.com'
]);
```

- Resource: gestiona 7 rutas
```bash
php artisan make:controller CategoryController --resource

php artisan make:controller CategoryController --resource --model=Category
```
```injectablephp
// routers.php
Route::resource('categories', CategoryController::class);
```
```bash
php artisan route:list
+--------+-----------+----------------------------+--------------------+------------------------------------------------------------+------------------------------------------+
| Domain | Method    | URI                        | Name               | Action                                                     | Middleware                               |
+--------+-----------+----------------------------+--------------------+------------------------------------------------------------+------------------------------------------+
|        | GET|HEAD  | categories                 | categories.index   | App\Http\Controllers\Admin\CategoryController@index        | web                                      |
|        | POST      | categories                 | categories.store   | App\Http\Controllers\Admin\CategoryController@store        | web                                      |
|        | GET|HEAD  | categories/create          | categories.create  | App\Http\Controllers\Admin\CategoryController@create       | web                                      |
|        | GET|HEAD  | categories/{category}      | categories.show    | App\Http\Controllers\Admin\CategoryController@show         | web                                      |
|        | PUT|PATCH | categories/{category}      | categories.update  | App\Http\Controllers\Admin\CategoryController@update       | web                                      |
|        | DELETE    | categories/{category}      | categories.destroy | App\Http\Controllers\Admin\CategoryController@destroy      | web                                      |
|        | GET|HEAD  | categories/{category}/edit | categories.edit    | App\Http\Controllers\Admin\CategoryController@edit         | web                                      |
+--------+-----------+----------------------------+--------------------+------------------------------------------------------------+------------------------------------------+
```