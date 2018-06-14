#!/bin/sh

/squirrel serve -repo=$AWS_S3_BUCKET -tls=false --basic-auth=$BASIC_AUTH -provider=s3
