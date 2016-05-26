FROM alpine

ADD https://releases.hashicorp.com/vault/0.5.2/vault_0.5.2_linux_amd64.zip /tmp/vault
RUN apt-get update \
    && apt-get install -y unzip \
    && rm -rf /var/lib/apt/lists/* \

RUN cd /tmp/vault \
    && unzip vault_0.5.2_linux_amd64.zip \
    && mv vault /usr/local/bin \
    && rm -f vault_0.5.2_linux_amd64.zip \
    && cd /tmp && rm -rf /tmp/vault

EXPOSE 8200

ENTRYPOINT [ "vault" ]
CMD [ "server" ]
