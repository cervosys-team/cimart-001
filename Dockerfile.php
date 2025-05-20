FROM php:8.2-fpm

# instal ekstensi pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable pdo_mysql

RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl

RUN php artisan storage:link
