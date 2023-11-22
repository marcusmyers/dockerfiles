FROM php:8.1-cli

ENV DEVICE_IP="192.168.1.1" \
 NTFY_SERVER_PUBLISH="https://ntfy.sh/alerts" \
 MESSAGE="On network" \
 TIMEZONE="America\New_York"

RUN apt update && apt install -y iputils-ping && rm -rf /var/lib/apt/lists/*
COPY ./check-device.php /app/

ENTRYPOINT ["php"]
CMD ["/app/check-device.php"]
