FROM php:7.2-fpm
RUN apt-get update \
    && docker-php-ext-install pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY php.ini /usr/local/etc/php/