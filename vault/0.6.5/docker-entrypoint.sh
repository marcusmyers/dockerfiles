#!/bin/sh

set -e

# VAULT_CONFIG_DIR isn't exposed as a volume but you can compose additional
# config files in there if you use this image as a base
VAULT_CONFIG_DIR=/vault/config

# You can also set the VAULT_LOCAL_CONFIG environment variable to pass some
# Vault configuration JSON without having to bind any volumes.
if [ -n "$VAULT_LOCAL_CONFIG" ]; then
  echo "$VAULT_LOCAL_CONFIG" > "$VAULT_CONFIG_DIR/local.json"
fi

exec "vault $@"
