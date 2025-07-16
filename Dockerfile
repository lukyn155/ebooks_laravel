FROM php:8.2-fpm

# 1) hlavičky k SQLite
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
         libsqlite3-dev \
    && rm -rf /var/lib/apt/lists/*

# 2) jediné, co kompilujeme, je pdo_sqlite
RUN docker-php-ext-install pdo_sqlite

WORKDIR /var/www
