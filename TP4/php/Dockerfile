FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

ENV APP_ENV=prod

RUN docker-php-ext-install pdo_mysql

# Install dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Allow composer to be run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY . .

# Install dependencies
RUN composer install --no-dev --no-cache --no-interaction --no-progress --optimize-autoloader