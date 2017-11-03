FROM php:7.0-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

LABEL io.whalebrew.name 'phpunit'
LABEL io.whalebrew.config.working_dir '$PWD'

ADD https://phar.phpunit.de/phpunit.phar /usr/local/bin/phpunit

RUN chmod +x /usr/local/bin/phpunit

ENTRYPOINT [ "/usr/local/bin/phpunit" ]
CMD [ "--help" ]
