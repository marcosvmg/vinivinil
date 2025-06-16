# Dockerfile para Laravel com PHP 8.1 e extensões necessárias

FROM php:8.1-fpm

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

# Instalar dependências PHP via composer
RUN composer install --no-dev --optimize-autoloader

# Permissões (ajuste se necessário)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expõe porta 9000 (PHP-FPM padrão)
EXPOSE 9000

# Start do PHP-FPM
CMD ["php-fpm"]
