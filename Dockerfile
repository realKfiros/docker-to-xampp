FROM php:8.2-apache

ARG WITH_XDEBUG=true

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo pdo_mysql; \
    if [ $WITH_XDEBUG = "true" ] ; then \
        pecl install xdebug; \
    fi ;

RUN a2enmod rewrite
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
