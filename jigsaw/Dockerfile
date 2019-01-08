FROM marcusmyers/composer:1.8.0
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ENV COMPOSER_HOME=/composer

RUN mkdir /composer \
    && mkdir /app \
    && composer global require tightenco/jigsaw

ENV PATH="/composer/vendor/bin:${PATH}"

WORKDIR /app
