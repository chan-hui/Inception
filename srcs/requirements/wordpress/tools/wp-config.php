<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'chanhuil' );

/** Database password */
define( 'DB_PASSWORD', 'login1111' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?} N,@ORl7n{!qST=:7,]Zs!EN0YQsFF4w..#*q%6@r/xPnmU%UuO9k?`)1LUyhU');
define('SECURE_AUTH_KEY',  '=Y]D6^[<~s/gB18Rr~iEpi<vp0y8n}pTkGm5Eh||W) jZqvrOU%.!)nx+b+!Uks^');
define('LOGGED_IN_KEY',    'D/n-)m!4$%}bi71CJue4]Jbc}vO5#<do:{{g>[DpI*ln-y!^T%+Z-Zu;sJoS6=-O');
define('NONCE_KEY',        'm-/HC##rD<5O-)87zJ#T@Auh]2d^JD8w?j[NwmN-)9ySj_[8Nfwr<#?eCXyRZ>p|');
define('AUTH_SALT',        '&@)|1@1Whs*9h%fO4bAPh],5cvm{K,OEQsji5)gI[j/+VhpH{+1~mKD=|)tOR~c)');
define('SECURE_AUTH_SALT', 'W*6l=[7KcBMWn9G6LKrE`!#pC9^7`Qay7cu^_n/U(KlEcx5vpLB/FRz`V&.bTV;N');
define('LOGGED_IN_SALT',   '{{|5,VUnuV$><;(*EEcS_&p5zH8Y%p$k:zo{qgqc$Rz,6@Sm,rO^2Jvr LyXjKJC');
define('NONCE_SALT',       ')UIHMzhuQ0 Oq0sDWfm(#ub}J]L~%@}-WnN|kBEF+*kFQoK!K|Wwe~kv)F$>N$i.');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
