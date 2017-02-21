FROM alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk add --update unzip \
      bash \
      ca-certificates \
    && rm -rf /var/cache/apk/*

ADD https://releases.hashicorp.com/vault/0.6.5/vault_0.6.5_linux_amd64.zip /tmp
RUN cd /tmp \
    && unzip vault_0.6.5_linux_amd64.zip \
    && mv vault /usr/local/bin/vault \
    && rm -f vault_0.6.5_linux_amd64.zip

RUN mkdir -p /vault/logs && \
    mkdir -p /vault/data && \
    mkdir -p /vault/config

EXPOSE 8200

VOLUME ["/vault/logs"]
VOLUME ["/vault/data"]

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["server"]
