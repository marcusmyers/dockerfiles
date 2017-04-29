FROM marcusmyers/composer:1.4.1
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk update \
    && docker-php-ext-install gd mbstring mysqli pdo pdo_mysql mcrypt \
    && rm -rf /var/cache/apk/*

RUN mkdir /app
WORKDIR /app
