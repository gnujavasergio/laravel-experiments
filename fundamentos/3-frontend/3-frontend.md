## Frontend

### Laravel UI

- https://github.com/laravel/ui

```bash
# Laravel 8.x, 9.x
composer require laravel/ui --dev
# Laravel 7.x
composer require laravel/ui:^2.0 --dev
# laravel 5.8 y 6.x
composer require laravel/ui:^1.0 --dev


# Esqueleteo basico de login y registro
php artisan ui:auth

# Generate basic scaffolding
php artisan ui bootstrap
php artisan ui vue
php artisan ui react

# Generate login / registration scaffolding...
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth
```

### Laravel jetstream

- https://github.com/laravel/jetstream
- Laravel Jetstream es un kit de inicio de aplicación bellamente diseñado para Laravel y proporciona el punto de partida
  perfecto para su próxima aplicación de Laravel. Jetstream proporciona la implementación para el inicio de sesión,
  registro, verificación de correo electrónico, autenticación de dos factores, administración de sesiones, API a través
  de Laravel Sanctum y funciones opcionales de administración de equipos.

### Laravel Breeze

- https://github.com/laravel/breeze
- Breeze proporciona un punto de partida mínimo y simple para crear una aplicación Laravel con autenticación. Diseñado
  con Tailwind, Breeze publica controladores de autenticación y vistas para su aplicación que se pueden personalizar
  fácilmente según las necesidades de su propia aplicación. Laravel Breeze funciona con Blade y Tailwind.