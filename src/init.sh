#!/bin/sh

composer install
php artisan key:generate
php artisan migrate:fresh
php artisan db:seed --class=Alunos
