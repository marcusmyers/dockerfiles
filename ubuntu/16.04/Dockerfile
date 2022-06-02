FROM ubuntu:16.04
MAINTAINER Mark Myers <marcusmyers@gmail.com>

# Install packages
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
    apt-get -qyy dist-upgrade && \
    apt-get -qyy install \
      software-properties-common \
      curl \
      unzip \
      locales \
      tzdata \
      vim \
      apt-transport-https && \
      apt-get -q clean && \
      rm -rf /var/lib/apt/lists/* && \
    localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8 && \
    ln -sf /usr/share/zoneinfo/America/New_York /etc/localtime && \
    dpkg-reconfigure --frontend noninteractive tzdata

ENV LANG=en_US.UTF-8 \
    LC_ALL=en_US.utf8
