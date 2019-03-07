<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'texintl.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nNjjhR6@N(>o#)5m,w5:I`oi&:.^]iM:~$F[8*aU($Z85>y`)iNEe)Bc54tFtny_');
define('SECURE_AUTH_KEY',  '-=?k{~i}WlQ20K B*t/qD B5!0 Ojk^v-L5PeLcqoh~f(08iEj,a&f ,XNFP`.l5');
define('LOGGED_IN_KEY',    'UAg+ExEtHM{l7OCQU[z|b`gR.c-hbrZ=<k Y:&e:_:7$&]o&R*wJ:Bc#3s~?~9FI');
define('NONCE_KEY',        'vwY}pY_X=`IQw/||#8[=6mcVzhjcywsnz+I(A.6=0Dyx(4ebuc.||I5O#F/8Yge@');
define('AUTH_SALT',        '{{{Z;-ATTB)BSbEIJH0P,u=c8V5<>T&zEA=hx_fH8+,m<)@JE%$gOjmjgNm8*%8o');
define('SECURE_AUTH_SALT', '9eT1;koB9c);h9K{dXKSugR6|X%1|~iKC9}V4%9KE;t!`q]pW=I^Qh&DP0~;/fQ/');
define('LOGGED_IN_SALT',   'G3yX,^3}0f[WgYtW,MCC`6#oU+C0mWW6sYhW&MTdebrpAHZ}FELU8By:OAM2cG6&');
define('NONCE_SALT',       '?lDb&Rsc=V2)!qsV*)HoFY+9[^v,zd4Ox*l-i&,]/JJOHbR(iS*A@D(wA${;7|~N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
