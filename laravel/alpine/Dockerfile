FROM marcusmyers/composer:1.5.2
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk add --update curl libcurl libxml2-dev libxml2 ffmpeg chromium mysql-client \
    && docker-php-ext-install gd mbstring mysqli pdo pdo_mysql mcrypt zip exif dom json \
    && rm -rf /var/cache/apk/*

RUN mkdir /app
WORKDIR /app
