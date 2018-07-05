FROM php:7.2-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>
ARG VERSION

ENV COMPOSER_HOME="/.composer"

ADD https://getcomposer.org/download/${VERSION}/composer.phar /usr/local/bin/composer

LABEL io.whalebrew.name 'composer'
LABEL io.whalebrew.config.volumes '["~/.composer:/.composer"]'

RUN apk add --update tzdata freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  && cp /usr/share/zoneinfo/America/New_York /etc/localtime \
  && echo "America/New_York" >  /etc/timezone \
  && docker-php-ext-install zip \
  && chmod +x /usr/local/bin/composer \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*

ENTRYPOINT ["/usr/local/bin/composer"]
