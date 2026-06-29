FROM php:8.4-cli-alpine

WORKDIR /app

RUN apk add --no-cache sqlite-libs libpng libjpeg-turbo libwebp freetype libxpm oniguruma libzip zip unzip curl git && \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS sqlite-dev libpng-dev libjpeg-turbo-dev freetype-dev libxpm-dev oniguruma-dev libzip-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_sqlite mbstring gd zip fileinfo && \
    apk del .build-deps

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader && \
    mkdir -p database && \
    touch database/database.sqlite && \
    chmod -R 777 storage bootstrap/cache database

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
