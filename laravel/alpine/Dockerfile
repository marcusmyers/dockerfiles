FROM marcusmyers/composer:1.4.1
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk add --update ffmpeg chromium \
    && docker-php-ext-install gd mbstring mysqli pdo pdo_mysql mcrypt curl zip exif dom json \
    && rm -rf /var/cache/apk/*

RUN mkdir /app
WORKDIR /app
