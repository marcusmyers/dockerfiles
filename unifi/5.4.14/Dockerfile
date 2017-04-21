FROM marcusmyers/ubuntu:16.04
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apt-key adv --keyserver keyserver.ubuntu.com --recv C0A52C50

RUN echo "deb http://www.ubnt.com/downloads/unifi/debian unifi5 ubiquiti" >> /etc/apt/sources.list.d/200-unifi.list

ENV JAVA_MAX_HEAP_SIZE 512M

# Install Supporting Packages
RUN apt-get -q update && \
  apt-get install -qy --force-yes unifi && \
  apt-get -q clean && \
  rm -rf /var/lib/apt/lists/*

EXPOSE 8080/tcp 8081/tcp 8443/tcp 8843/tcp 8880/tcp 3478/udp

COPY ./unifi_controller /bin/

VOLUME /usr/lib/unifi/data
WORKDIR /usr/lib/unifi/data

ENTRYPOINT ["/bin/unifi_controller"]
CMD ["start"]

