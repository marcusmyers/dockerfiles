FROM marcusmyers/ubuntu:16.04
MAINTAINER marcusmyers <marcusmyers@gmail.com>

ENV PHP_CONF=/etc/php/7.0/fpm/php.ini \
    FPM_CONF=/etc/php/7.0/fpm/php-fpm.conf \
    FPM_POOL=/etc/php/7.0/fpm/pool.d/www.conf \
    NGINX_VERSION=1.10.2

COPY config/nginx.conf /etc/nginx/nginx.conf
COPY config/default.conf.erb /etc/nginx/default.conf.erb
COPY config/start /etc/nginx/start
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN apt-get -qq update && \
  apt-get install -y \
    build-essential \
    ca-certificates \
    php-fpm \
    php-mysql \
    php-json \
    php-gd \
    mysql-client \
    libssl-dev \
    libpcre3 \
    libpcre3-dev \
    ruby \
    supervisor && \
  apt-get -q clean && \
  rm -rf /var/lib/apt/list/*

RUN mkdir /app /run/app /src && cd /src && \
  curl -L -o /src/nginx.tar.gz http://nginx.org/download/nginx-${NGINX_VERSION}.tar.gz && \
  tar -xvf nginx.tar.gz && \
  cd nginx-${NGINX_VERSION} && \
  ./configure \
    --prefix=/opt/nginx-${NGINX_VERSION} \
    --conf-path=/etc/nginx/nginx.conf \
    --with-http_ssl_module \
    --with-http_gzip_static_module \
    --with-http_realip_module && \
  make && \
  make install && \
  mkdir /etc/nginx/conf.d && \
  rm -rf /src

RUN php -r "copy('https://getcomposer.org/installer', '/composer-setup.php');" && \
  php /composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
  php -r "unlink('/composer-setup.php');"

WORKDIR /app
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["/usr/bin/supervisord"]
