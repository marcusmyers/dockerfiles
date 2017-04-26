FROM marcusmyers/composer:1.4.1
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN docker-php-ext-install gd mbstring mysqli pdo pdo_mysql mcrypt

RUN mkdir /app
WORKDIR /app
