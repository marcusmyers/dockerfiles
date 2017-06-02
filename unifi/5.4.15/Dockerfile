FROM marcusmyers/ubuntu:16.04
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apt-key adv --keyserver keyserver.ubuntu.com --recv C0A52C50

RUN echo "deb http://www.ubnt.com/downloads/unifi/debian unifi5 ubiquiti" >> /etc/apt/sources.list.d/200-unifi.list

ENV UNIFI_INSTALL_URL=http://dl.ubnt.com/unifi/5.4.15/unifi_sysvinit_all.deb \
    JAVA_MAX_HEAP_SIZE 512M

# Install Supporting Packages
RUN apt-get -q update && \
  apt-get install -qy --force-yes \
    prelink \
    mongodb-server \
    binutils \
    jsvc \
    openjdk-8-jre \
    openjdk-8-jre-headlessi && \
  apt-get -q clean && \
  rm -rf /var/lib/apt/lists/* && \
  curl -L -o unifi_sysvinit_all.deb $UNIFI_INSTALL_URL && \
  dpkg -i unifi_sysvinit_all.deb && \
  execstack -c /usr/lib/unifi/lib/native/Linux/amd64/libubnt_webrtc_jni.so && \
  rm unifi_sysvinit_all.deb

EXPOSE 8080/tcp 8081/tcp 8443/tcp 8843/tcp 8880/tcp 3478/udp

COPY ./unifi_controller /bin/

VOLUME /usr/lib/unifi/data
WORKDIR /usr/lib/unifi/data

ENTRYPOINT ["/bin/unifi_controller"]
CMD ["start"]

