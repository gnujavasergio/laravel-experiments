## Composer

Actualizar comnposer
```bash
# --2 para actualizar a un version superior
composer self-update --2
```
## Instalcion de lavarel

Tenemos dos formas de realizar la instlacion

1. Instalar con composer
```bash
# Instalar la ultima version
composer create-project --prefer-dist laravel/laravel nombre-app
# Instalar una version especifica 
composer create-project --prefer-dist laravel-laravel dir "6.*"
```

2. Instalar con el instalador de laravel
**Nota:** https://laravel.com/docs/8.x
```bash
composer global require laravel/installer
```