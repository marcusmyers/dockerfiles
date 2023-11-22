FROM cgr.dev/chainguard/php:latest

ENV WEBSITE_CHECK="https://pulse.laravel.com/" \
 NTFY_SERVER_PUBLISH="https://ntfy.myersfam.me/bandm_alerts" \
 MESSAGE="Laravel Pulse is available!!!" \
 TIMEZONE="America\New_York"

COPY ./check_site.php /app/

CMD ["/app/check_site.php"]
