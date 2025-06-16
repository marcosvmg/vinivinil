#!/bin/bash

# Instala dependências
composer install --optimize-autoloader --no-dev

# Configura variáveis de ambiente
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Executa migrations (opcional)
php artisan migrate --force

# Inicia o servidor
php artisan serve --host=0.0.0.0 --port=10000