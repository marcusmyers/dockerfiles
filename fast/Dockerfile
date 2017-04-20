FROM alpine:3.5
MAINTAINER Mark Myers <marcusmyers@gmail.com>
RUN apk add --update curl \
      ca-certificates \
    && rm -rf /var/cache/apk/*

RUN curl -L https://github.com/ddo/fast/releases/download/v0.0.1/fast_linux_386 -o /usr/local/bin/fast \
    && chmod a+x /usr/local/bin/fast

LABEL io.whalebrew.name 'fast'

ENTRYPOINT [ "/usr/local/bin/fast" ]
