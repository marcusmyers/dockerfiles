FROM python:3.6.2-alpine3.6

ARG VERSION

ENV AUTHORIZATION_FAIL_MAX_RETRIES=3 \
    B2_ACCOUNT_ID= \
    B2_APPLICATION_KEY=

COPY entrypoint.sh /usr/local/bin/entrypoint.sh

RUN pip install b2==${VERSION}

LABEL io.whalebrew.name 'b2'

ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
