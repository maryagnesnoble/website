#!/bin/bash

while [ 1 ] ; do
    [ -e "tmp.url" ] && \
	touch "lock" && \
	wget -i tmp.url -O tmp.download && \
	rm "lock" && \
	rm "tmp.url" || \
	sleep 3
done
