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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'e<m-u,F0Ueo.h!|/I:R~dy}c4psUikXU/glTlmrb0O8ug8Ma0L&l&+(DLyvvBiN8');
define('SECURE_AUTH_KEY',  'OU}_Vcc:j1p3D={4qpg9=v]~GG:<JD<QZy`]fBU~6)2%ZfZSUS(d=^rg+8&fz^ga');
define('LOGGED_IN_KEY',    'P |4e|GB;4r--oN7+LAZREO=oO9i}~7a4$aoyIE&P![,pRx[4o*/9Tw~H7(YVK7u');
define('NONCE_KEY',        'L,%$pxvUuz+!j^&_H[s6ny+f3O^A}YrdVlh@ Y`02Gb[E|Fix3PvPmS|cHrBNJ%.');
define('AUTH_SALT',        'g8Jpl5PW:Nk *R|lJ,eAznBfGza|=bFmfot_v8`jj:QV fXYGbZqR02y%PRop4=+');
define('SECURE_AUTH_SALT', 'WzWRJ6F;#s4wp{8_Zy9H`)^}HCX|Lf+C^F.#&wF4/39nMA]-1=^&-,5=m*tZW17g');
define('LOGGED_IN_SALT',   'oVRU,Fe dH|}DowV+o[I]r;tO|B5u<y58,JOB^3` 7^v,r)0Aa#_/|K63J<za-Ah');
define('NONCE_SALT',       '%C+Lmy+3pS3=lYh&&|!(z57i4-@&.7r_xqkd& x&r>8HplHGuX,-muh9i9:Pf]P.');
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
