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

# Copiar arquivos do projeto
COPY . .

# Instalar dependências
RUN composer install --no-dev --optimize-autoloader

# Permissões
RUN chown -R www-data:www-data storage bootstrap/cache

# Porta correta para o Render (http)
EXPOSE 8080

# Rodar Laravel na porta correta
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
