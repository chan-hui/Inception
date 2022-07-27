FROM debian:buster

RUN	apt-get -y update && \
	apt-get -y upgrade && \
	apt-get -y install mariadb-client \
						php7.3 \
						php7.3-fpm \
						php7.3-curl \
						php7.3-mysql \
						php7.3-cli \
						php7.3-mbstring \
						wget \
						sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/
COPY ./tools /var/www/

RUN chmod +x /var/www/setupfile.sh

ENTRYPOINT ["/var/www/setupfile.sh"]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
