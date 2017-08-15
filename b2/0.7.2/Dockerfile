FROM python:3.6.2-alpine3.6

ENV VERSION=0.7.2 \
    AUTHORIZATION_FAIL_MAX_RETRIES=3

RUN pip install b2==${VERSION}

LABEL io.whalebrew.name 'b2'

ENTRYPOINT [ "/usr/local/bin/b2" ]
