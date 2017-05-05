FROM ubuntu:16.04
MAINTAINER Mark Myers <marcusmyers@gmail.com>

# Set correct timezone for time and date
RUN ln -sf /usr/share/zoneinfo/America/New_York /etc/localtime && dpkg-reconfigure --frontend noninteractive tzdata

# Install packages
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get -y install \
      software-properties-common \
      curl \
      unzip \
      locales \
      vim && \
      apt-get -q clean && \
      rm -rf /var/lib/apt/lists/* && \
    localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8

ENV LANG=en_US.UTF-8
