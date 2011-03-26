#!/bin/bash

while [ 0 ] ; do
    [ -e "tmp.download" ] && [ ! -e "lock" ] && \
	grep -A5 -B5 "$1" < "tmp.download" && exit 0 ||
	sleep 0.5
done
