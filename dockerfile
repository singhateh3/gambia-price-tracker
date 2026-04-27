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

CMD ["sh", "-c", "printf 'APP_NAME=\"%s\"\\nAPP_ENV=%s\\nAPP_KEY=%s\\nAPP_DEBUG=%s\\nAPP_URL=%s\\nDB_CONNECTION=%s\\nDB_HOST=%s\\nDB_PORT=%s\\nDB_DATABASE=%s\\nDB_USERNAME=%s\\nDB_PASSWORD=%s\\nCACHE_STORE=%s\\nSESSION_DRIVER=%s\\n' \"$APP_NAME\" \"$APP_ENV\" \"$APP_KEY\" \"$APP_DEBUG\" \"$APP_URL\" \"$DB_CONNECTION\" \"$DB_HOST\" \"$DB_PORT\" \"$DB_DATABASE\" \"$DB_USERNAME\" \"$DB_PASSWORD\" \"$CACHE_STORE\" \"$SESSION_DRIVER\" > .env && php artisan config:clear && php artisan serve --host=0.0.0.0 --port=10000"]
