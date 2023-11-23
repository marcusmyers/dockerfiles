FROM cgr.dev/chainguard/php:latest

ENV WEBSITE_CHECK="https://www.laravel.com/" \
 NTFY_SERVER_PUBLISH="https://ntfy.sh/alerts" \
 MESSAGE="Site is available!!!" \
 TIMEZONE="America\New_York" \
 DEBUG=0

COPY ./check_site.php /app/

CMD ["/app/check_site.php"]
