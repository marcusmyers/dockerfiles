FROM ubuntu:18.04
MAINTAINER Mark Myers <marcusmyers@gmail.com>

ENV JAVA_MAX_HEAP_SIZE=512M

# Install Supporting Packages
RUN apt-get -q update && \
    apt-get install -qyy gpg ca-certificates && \
    apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6 && \
    apt-key adv --keyserver keyserver.ubuntu.com --recv 06E85760C0A52C50 && \
    echo "deb http://www.ubnt.com/downloads/unifi/debian stable ubiquiti" >> /etc/apt/sources.list.d/200-unifi.list && \
    echo "deb http://repo.mongodb.org/apt/ubuntu xenial/mongodb-org/3.4 multiverse" | tee /etc/apt/sources.list.d/mongodb-org-3.4.list && \
    apt-get -q update && \
    apt-get install -qyy --allow-remove-essential --allow-downgrades --allow-change-held-packages apt-transport-https unifi curl locales tzdata unzip openjdk-8-jre-headless && \
  apt-get -q clean && \
  rm -rf /var/lib/apt/lists/*

EXPOSE 8080/tcp 8081/tcp 8443/tcp 8843/tcp 8880/tcp 3478/udp

COPY ./unifi_controller /bin/
COPY ./unifi_ssl_import /bin/
COPY ./prune.js /bin/

VOLUME /usr/lib/unifi/data
WORKDIR /usr/lib/unifi/data

ENTRYPOINT ["/bin/unifi_controller"]
CMD ["start"]
