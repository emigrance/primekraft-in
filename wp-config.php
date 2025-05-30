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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u845274895_dTchU' );

/** Database username */
define( 'DB_USER', 'u845274895_wRVKi' );

/** Database password */
define( 'DB_PASSWORD', 'MwBa5lgHUR' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'PZ+tiEgxFsVC%O-C3u!*qqWT<mMiB C`aL]P[7vzHVQH#~|hsB9)SMf<[D8Gymp ' );
define( 'SECURE_AUTH_KEY',   '66;+>;Nr-HF?9]3eEj 0VDY9)/RgN+^j:*cCh!k65~f[^^C$ld^!7 KPPQMBS65C' );
define( 'LOGGED_IN_KEY',     ')-v5Gnqks:{#kau71 -EXsX+-ZM`3 mQo+5NAbD/M[GL&U648r.pNe+bAc3/fgyz' );
define( 'NONCE_KEY',         'L+_]@a3mQBb~hU|Dj}lE*b 3Qk#Js,w*eXT{.vSe~BK!oa aw@bat _z/LBsQ.oP' );
define( 'AUTH_SALT',         '7g0iv4O$Z5%nIZdgr*JoUrVnY<_HW=dkj@jUmJC1Sr&$rnJNi}o<U!`iv%sWr<FI' );
define( 'SECURE_AUTH_SALT',  '$1Y*-7t<XSQU?tp$=#Kv(6(qS{!Z7Qor3W#)2!8Qkz]:;(xP yd)oU(ZW2Ypcq&)' );
define( 'LOGGED_IN_SALT',    '}|(ei0BU1Bg86{1g&v8d`WjO_wlM+{r9=hKV,KJt*wxCr3kS`H3+p}Q_BcHInO7X' );
define( 'NONCE_SALT',        'cD+[XpL)FGGN8F^PPbhcWfcJb$b-bSRwRB(_)G9}js/.($2Xf!A!yw93nkuwqzo(' );
define( 'WP_CACHE_KEY_SALT', '9c?,OA/.8Sfx74I+Zj].1b;7KVsi}9&9Vl}*AIS&=sGrhAA3`QCo>6lI&eE<c;hw' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
