FROM marcusmyers/composer:2.3.6
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ENV COMPOSER_HOME=/composer

RUN mkdir /composer \
    && mkdir /app \
    && composer global require tightenco/jigsaw

ENV PATH="/composer/vendor/bin:${PATH}"

WORKDIR /app
