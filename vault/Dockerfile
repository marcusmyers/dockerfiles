FROM alpine
MAINTAINER Mark Myers <marcusmyers@gmail.com>

RUN apk add --update unzip \
      bash \
      ca-certificates \
    && rm -rf /var/cache/apk/*

ADD https://releases.hashicorp.com/vault/0.6.0/vault_0.6.0_linux_amd64.zip /tmp
RUN cd /tmp \
    && unzip vault_0.6.0_linux_amd64.zip \
    && mv vault /usr/local/bin \
    && rm -f vault_0.6.0_linux_amd64.zip \
    && mkdir /etc/vault

EXPOSE 8200

VOLUME ["/etc/vault"]

ENTRYPOINT ["/usr/local/bin/vault"]
CMD ["server"]
