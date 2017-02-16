#!/bin/bash -e

# tweak php-fpm config
sed -i -e "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g" ${PHP_CONF}
sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" ${FPM_CONF}
sed -i -e "s/;catch_workers_output\s*=\s*yes/catch_workers_output = yes/g" -e "s/^;clear_env = no$/clear_env = no/" ${FPM_POOL}

exec "$@"
