# pull official base image
FROM php:7.4-apache

# install system dependencies
# RUN docker-php-ext-install pdo pdo_pgsql
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html