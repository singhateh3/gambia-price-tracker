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
    && docker-php-ext-install pdo pdo_mysql mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --optimize-autoloader --no-dev

EXPOSE 10000

CMD ["sh", "-c", "echo \"APP_NAME=$APP_NAME\" > .env && echo \"APP_ENV=$APP_ENV\" >> .env && echo \"APP_KEY=$APP_KEY\" >> .env && echo \"APP_DEBUG=$APP_DEBUG\" >> .env && echo \"APP_URL=$APP_URL\" >> .env && echo \"DB_CONNECTION=$DB_CONNECTION\" >> .env && echo \"DB_HOST=$DB_HOST\" >> .env && echo \"DB_PORT=$DB_PORT\" >> .env && echo \"DB_DATABASE=$DB_DATABASE\" >> .env && echo \"DB_USERNAME=$DB_USERNAME\" >> .env && echo \"DB_PASSWORD=$DB_PASSWORD\" >> .env && echo \"CACHE_STORE=$CACHE_STORE\" >> .env && echo \"SESSION_DRIVER=$SESSION_DRIVER\" >> .env && php artisan config:clear && php artisan serve --host=0.0.0.0 --port=10000"]
