FROM marcusmyers/composer:1.5.2
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ENV COMPOSER_HOME=/composer

RUN mkdir /composer \
    && mkdir /app \
    && composer global require tightenco/jigsaw

ENV PATH="/composer/vendor/bin:${PATH}"

WORKDIR /app
