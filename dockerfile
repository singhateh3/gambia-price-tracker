FROM php:8.3-cli

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring \
    && apt-get clean

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --optimize-autoloader --no-dev

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
