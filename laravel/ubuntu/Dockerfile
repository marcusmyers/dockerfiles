FROM marcusmyers/composer:1.6.5 as composer

FROM marcusmyers/ubuntu:16.04

COPY --from=composer /usr/local/bin/composer /usr/local/bin/
RUN curl https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key add - && \
    echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list && \
    add-apt-repository -y ppa:ondrej/php && \
    apt-get update -y && \
    apt-get -f install && \
    apt-get -y install php7.2 \
      ffmpeg \
      php7.2-gd \
      php7.2-imagick \
      php7.2-mbstring \
      mysql-client \
      php7.2-mcrypt \
      php7.2-curl \
      php7.2-zip \
      php7.2-exif \
      php7.2-dom \
      php7.2-xml \
      php7.2-pdo \
      php7.2-mysql \
      php7.2-json \
      google-chrome-stable && \
    apt-get -q clean && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir /app
WORKDIR /app
