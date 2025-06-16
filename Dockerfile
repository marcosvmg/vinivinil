# Dockerfile para Laravel com PHP 8.2 + PHP-FPM + extensões essenciais
FROM php:8.2-fpm

# Instalar dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libpq-dev \
    curl \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip mbstring gd opcache

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar arquivos do projeto para o container
COPY . .

# Instalar dependências PHP via composer
RUN composer install --no-dev --optimize-autoloader

# Ajustar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copiar arquivo de configuração Nginx customizado
COPY ./nginx.conf /etc/nginx/sites-enabled/default

# Expor a porta 8080 (Render usa 8080 por padrão)
EXPOSE 8080

# Comando para rodar PHP-FPM + Nginx no foreground
CMD service nginx start && php-fpm
