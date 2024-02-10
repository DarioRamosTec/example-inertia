# ¡Creemos un CRUD con InertiaJS!

Es momento de crear nuestra primera aplicación con **InertiaJS**. En este caso, vamos a hacer todo un CRUD utilizando **InertiaJS** y sus tecnologías.

# Primeros pasos

Empecemos creando las necesidades principales de nuestra aplicación, es decir, las dependencias.

## Instalar dependencias

Empecemos creando nuestro proyecto en Laravel.

> **Nota:** En esta práctica utilizaremos distintos recursos, añade los que tu quieras.

    composer create-project laravel/laravel example-inertia
    composer i

Instalemos las dependencias.

    composer require laravel/breeze --dev
    php artisan breeze:install

Después, preparemos las dependencias.

    php artisan migrate
    npm install
    php artisan serve
    npm run dev
