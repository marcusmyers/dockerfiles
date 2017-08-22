FROM php:7.1-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ADD https://github.com/wp-cli/wp-cli/releases/download/v1.3.0/wp-cli-1.3.0.phar /usr/local/bin/

RUN apk add --update tzdata freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  && cp /usr/share/zoneinfo/America/New_York /etc/localtime \
  && echo "America/New_York" >  /etc/timezone \
  && mv /usr/local/bin/wp-cli-1.3.0.phar /usr/local/bin/wp \
  && chmod +x /usr/local/bin/wp \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*
