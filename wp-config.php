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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpjenkins' );

/** MySQL database username */
define( 'DB_USER', 'wpjenkins' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OeXwqSFbG3hTCFW8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3+yqQ>>= ~2VgH3o(32]<t^^M<$CW>$!GC~7Z<v{~E<%{W;szq531{ob6WS>SGwf' );
define( 'SECURE_AUTH_KEY',  ' xE]lwH(!3*1Sli5q*`p~hMM9}T`JYLzr.YY=1tOX.:9,$Yu/o-``~#7`.!e)$q9' );
define( 'LOGGED_IN_KEY',    '1($_c513U!hqYNL?#fzla5DbV!tEC.wbkkKJERAQvcG||XMIZs;c*JXdSfh&cE.}' );
define( 'NONCE_KEY',        'lX,*J_,%PME&:Z*(H`X@XZP&O1(I?IJI<D6XNCzxpq%5B}e+Qi<Isl*~!YD*nqVU' );
define( 'AUTH_SALT',        'n2l_koKJ:T#Nk*s7&:2^hX.#j>RyIJET W_Z*X2$%ceEUB _7ToVJ 3OLXWI)-k^' );
define( 'SECURE_AUTH_SALT', '9cmy8d,(|*pfFdG!>&v0bk,jb.!c^*Z8W&fOl_ ho_USX0@ku/I?Cy0w~.o]5gh8' );
define( 'LOGGED_IN_SALT',   'CiMF+7%J5b-fgi7BNCWD5hs^Sk<s@slmw}E.z6ykl/kZA-w6+zmeOX$qB>C1{Dvm' );
define( 'NONCE_SALT',       '3o|)i6))KD.+GHEXo ED=!j) +uF(Y|99`B#I(E^EzzQ|K1XHpeK5|Mv j~#;_,e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yswp_jk_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
