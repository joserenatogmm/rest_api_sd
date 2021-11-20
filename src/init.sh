#!/bin/sh

# Copia o .env
cp .env.example .env

# Instala as Dependencias
composer install

# Set-up laravel
php artisan key:generate
php artisan migrate:fresh
php artisan db:seed --class=Alunos
