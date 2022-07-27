FROM debian:buster

RUN	apt-get -y update && \
	apt-get -y upgrade && \
	apt-get -y install nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools /var/www/

RUN chmod +x /var/www/setupfile.sh

ENTRYPOINT ["/var/www/setupfile.sh"]

CMD ["nginx", "-g", "daemon off;"]
