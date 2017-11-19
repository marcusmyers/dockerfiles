FROM php:7.1-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ADD https://getcomposer.org/download/1.4.1/composer.phar /usr/local/bin/

RUN apk add --update tzdata freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  && cp /usr/share/zoneinfo/America/New_York /etc/localtime \
  && echo "America/New_York" >  /etc/timezone \
  && mv /usr/local/bin/composer.phar /usr/local/bin/composer \
  && chmod +x /usr/local/bin/composer \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*
