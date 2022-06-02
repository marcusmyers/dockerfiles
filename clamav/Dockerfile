FROM ubuntu:22.04

RUN apt-get update && \
    apt-get install -y clamav-daemon && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

ADD http://database.clamav.net/main.cvd /var/lib/clamav/main.cvd
ADD http://database.clamav.net/daily.cvd /var/lib/clamav/daily.cvd
ADD http://database.clamav.net/bytecode.cvd /var/lib/clamav/bytecode.cvd
