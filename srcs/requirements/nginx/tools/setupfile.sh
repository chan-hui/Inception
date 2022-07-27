#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
	echo "nginx: creating ssl certification ...";
	openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42Seoul/OU=Gam/CN=chanhuil.42.fr" -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt
	echo "nginx: ssl certification created!";
fi

exec "$@"