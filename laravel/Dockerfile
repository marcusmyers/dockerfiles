FROM php:7.1-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk add --update tzdata \
  && cp /usr/share/zoneinfo/America/New_York /etc/localtime \
  && echo "America/New_York" >  /etc/timezone \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && php -r "unlink('composer-setup.php');"

RUN docker-php-ext-install gd mbstring mysqli pdo pdo_mysql mcrypt

RUN mkdir /app
WORKDIR /app
