<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'store1647');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'dOBjXL9L=-Jo]&h1h|y5|6qM2,B9+Se6F:VK<ZCgLK xgji,*5hl)Ng*YpQGAij:');
define('SECURE_AUTH_KEY',  '_.HcY5VAJr3_92k~>?W#o-nU9<W{LN[C=c*mR:j0%obW#v~K5ixqy$NHS*<&|W7D');
define('LOGGED_IN_KEY',    'Od9VZ:e60<i=rGGi`&xVZVIKl$Ga8hQG#i@=`@%7[>R5wB!M[)[5Xa%Z-IszbBcf');
define('NONCE_KEY',        'c:~y|fd2zJ7e]#Y3Asd)tLv;*b&.!-wwEp|I?]MzAC+K5Jm5{6M8zq FF>24;^[J');
define('AUTH_SALT',        '3ra}-7/NKicVdncOaC[SBi[uy1~b7Rgj4RnH}a%#?SuZ.vl<-OS4L;:bSWOuzmxh');
define('SECURE_AUTH_SALT', '*#3( |((iNrtX~:w5zx;u`lem]JX;]t6?pDR>K~xh%C+fhq5ylBKyUJgGnmn?p9o');
define('LOGGED_IN_SALT',   'YYr?!vVQB<.2%>JC~]oLq%f6ORh[RLbd8.eh#^3e!d Y*YPi+1]_uvk;`!;F1sf6');
define('NONCE_SALT',       '0pI{hLYTWZmLw)HN>>B(Nh_|$k*oD Pjxzo rx088-)nVj_;)yfQ@v/o &*<tEc|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
