FROM marcusmyers/ubuntu:16.04

ADD https://getcomposer.org/download/1.4.2/composer.phar /usr/local/bin/

RUN mv /usr/local/bin/composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    curl https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key add - && \
    echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list && \
    add-apt-repository -y ppa:ondrej/php && \
    apt-get update -y && \
    apt-get -f install && \
    apt-get -y install php7.1 \
      ffmpeg \
      php7.1-gd \
      php7.1-imagick \
      php7.1-mbstring \
      mysql-client \
      php7.1-mcrypt \
      php7.1-curl \
      php7.1-zip \
      php7.1-exif \
      php7.1-dom \
      php7.1-xml \
      php7.1-pdo \
      php7.1-mysql \
      php7.1-json \
      google-chrome-stable && \
    apt-get -q clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir /app
WORKDIR /app
