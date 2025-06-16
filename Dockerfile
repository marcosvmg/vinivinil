# Dockerfile para Laravel com PHP 8.2 e extensões necessárias

FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    libonig-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip mbstring

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar arquivos do projeto para o container
COPY . .

# Instalar dependências PHP via composer e limpar/cache config Laravel
RUN composer install --no-dev --optimize-autoloader \
  && php artisan config:clear \
  && php artisan config:cache

# Permissões (ajuste se necessário)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expõe porta 9000 (PHP-FPM padrão)
EXPOSE 9000

# Start do PHP-FPM com servidor Laravel na porta 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
