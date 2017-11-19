#!/bin/sh

if [ ! -f /root/.b2_account_info ]; then
  b2 authorize_account "$B2_ACCOUNT_ID" "$B2_APPLICATION_KEY"
fi

exec /usr/local/bin/b2 $@
