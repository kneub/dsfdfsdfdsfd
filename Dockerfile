FROM php:8.1.11-apache-buster

# Install system dependencies
RUN apt-get update && apt-get install -y git zip unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mysqli


RUN a2enmod rewrite


# Composer
COPY --from=composer/composer:2-bin /composer /usr/bin/composer

COPY ./composer.json composer.json
RUN composer install

# Virtual Host
COPY ./docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# PHP ini
COPY ./docker/php/ /usr/local/etc/php/conf.d/