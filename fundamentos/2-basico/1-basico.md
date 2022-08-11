## Comandos

## Database
- Realizar una migracion de tablas
```bash
php artisan migrate
```

- Crear datos - https://laravel.com/docs/8.x/database-testing#factory-states
```bash
php artisan tinker
# Create console
>>> User::factory()->count(3)->make();
# Create database
>>> User::factory()->count(3)->create(); 
```

## Serve
- Inicializar el servidor que tiene integrado laravel
```bash
php artisan serve
# Iniciar el servidor con un puerto especifico
php artisan serve --port=8001
php artisan serve --help 
```

## Make
- Crear un modelo
```bash
# Generate a model and a PostFactory class...
php artisan make:model Post --factory
php artisan make:model Post -f
 
# Generate a model and a PostSeeder class...
php artisan make:model Post --seed
php artisan make:model Post -s
 
# Generate a model and a PostController class...
php artisan make:model Post --controller
php artisan make:model Post -c
 
# Generate a model, PostController resource class, and form request classes...
php artisan make:model Post --controller --resource --requests
php artisan make:model Post -crR
 
# Generate a model and a PostPolicy class...
php artisan make:model Post --policy
 
# Generate a model and a migration, factory, seeder, and controller...
php artisan make:model Post -mfsc
 
# Shortcut to generate a model, migration, factory, seeder, policy, controller, and form requests...
php artisan make:model Post --all
``` 

- Crear un contralador
```bash
# Help
php artisan make:controller SaludarController --help

# Generate resources -r --resources
php artisan make:controller SaludarController -r
# 

php artisan make:controller Web/SaludarController -r
```

### Crear Request: La mejor forma para hacer validaciones
- https://laravel.com/docs/8.x/validation#rule-required
```bash
php artisan make:request UserRequest
```