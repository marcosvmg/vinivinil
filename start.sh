#!/bin/bash

# Gerar chave de aplicação se não existir
php artisan key:generate --force

# Limpar cache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Recriar cache
php artisan config:cache
php artisan view:cache
php artisan route:cache

# Iniciar PHP-FPM
php-fpm -D

# Iniciar Nginx
nginx -g 'daemon off;'