#!/bin/bash

echo "wordpress: initializing php-fpm ...";
chown -R www-data:www-data /var/www/*;
chown -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

if [ ! -f /var/www/html/wp-config.php ]; then
	echo "wordpress: downloading wordpress ...";
	mkdir -p /var/www/html
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
	chmod +x wp-cli.phar;
	mv wp-cli.phar /usr/local/bin/wp;

	cd /var/www/html;
	wp core download --allow-root;
	mv /var/www/wp-config.php /var/www/html/

	wp core install --allow-root --url=${DOMAIN_URL} --title=${WP_TITLE} --admin_user=${WP_ADMIN_ID} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL};
	wp user create --allow-root ${WP_USER_ID} ${WP_USER_EMAIL} --user_pass=${WP_USER_PASSWORD};
fi

echo "wordpress: wordpress is good to go!";

exec "$@"