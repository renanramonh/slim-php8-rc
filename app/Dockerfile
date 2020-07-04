FROM composer:2.0 as composer
COPY . /app
RUN composer install

FROM php:rc-fpm-alpine AS fpm
WORKDIR /var/www/myapp
COPY --from=composer /app .
COPY ./config/php.ini /usr/local/etc/php/php.ini

FROM nginx:1.17 AS nginx
COPY --from=fpm . /var/www/myapp
COPY ./config/default.conf /etc/nginx/conf.d/default.conf