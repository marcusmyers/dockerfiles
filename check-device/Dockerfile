FROM cgr.dev/chainguard/wolfi-base

ENV DEVICE_IP="192.168.1.1" \
 NTFY_SERVER_PUBLISH="https://ntfy.sh/alerts" \
 MESSAGE="On network" \
 TIMEZONE="America\New_York" \
 DEBUG=0

RUN apk add iputils php php-openssl ca-certificates
COPY ./check-device.php /app/

ENTRYPOINT ["/usr/bin/php"]
CMD ["/app/check-device.php"]
