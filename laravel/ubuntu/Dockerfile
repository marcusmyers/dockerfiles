FROM marcusmyers/ubuntu:16.04

ADD https://getcomposer.org/download/1.4.2/composer.phar /usr/local/bin/

RUN mv /usr/local/bin/composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    curl https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key add - && \
    echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list && \
    apt-get update && \
    apt-get -f install && \
    apt-get -y install php \
      ffmpeg \
      php-gd \
      php-imagick \
      php-mbstring \
      mysql-client \
      php-mcrypt \
      php-curl \
      php-zip \
      php-exif \
      php-dom \
      php-xml \
      php-pdo \
      php-mysql \
      php-json \
      google-chrome-stable && \
    apt-get -q clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir /app
WORKDIR /app
