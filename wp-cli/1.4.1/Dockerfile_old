FROM php:7.1-alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ENV VERSION=1.4.1

ADD https://github.com/wp-cli/wp-cli/releases/download/v${VERSION}/wp-cli-${VERSION}.phar /usr/local/bin/wp

RUN apk add --update tzdata freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  && cp /usr/share/zoneinfo/America/New_York /etc/localtime \
  && echo "America/New_York" >  /etc/timezone \
  && chmod +x /usr/local/bin/wp \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*

LABEL io.whalebrew.name 'wp'

ENTRYPOINT [ "/usr/local/bin/wp" ]
CMD [ "--allow-root" ]
