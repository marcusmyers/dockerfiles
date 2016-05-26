FROM alpine

RUN apk add --update unzip \
    && rm -rf /var/cache/apk/*

ADD https://releases.hashicorp.com/vault/0.5.2/vault_0.5.2_linux_amd64.zip /tmp
RUN cd /tmp \
    && unzip vault_0.5.2_linux_amd64.zip \
    && mv vault /usr/local/bin \
    && rm -f vault_0.5.2_linux_amd64.zip \
    && mkdir /etc/vault

EXPOSE 8200

VOLUME ["/etc/vault"]

ENTRYPOINT ["vault"]
CMD ["server"]
