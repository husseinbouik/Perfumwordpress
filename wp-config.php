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
define( 'DB_NAME', 'perfumwordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'srt`=3b>5z7Gro?Kgmnej#!^8QjDj59ZF6UEBk_J+)EDIefS4RV7bNN0>1I-d,0L' );
define( 'SECURE_AUTH_KEY',  'pl(Y|9]uw!twl73LPMCLfHWqs)vXyZ`]}MMmRF9O.LbW*X^Y(ah9o)(a{Y/.g-i=' );
define( 'LOGGED_IN_KEY',    'a;%.g@@wB/n[&UYvRU^9)P^6m9YIEBW}yXi6GZ4t),Qz~3_a+XP(,nDKCMx:_XwI' );
define( 'NONCE_KEY',        '1nY-VW{OUg;PX@.$5(jOe8S^a44; aUQ;z3;YSS(,#>D*C+Avf{v%mKUap}ch8L]' );
define( 'AUTH_SALT',        '-[ZM)&~EmlI{(2]H m4y!}#Y~OfU$0{aXRKZf5N =,NMH&BGP{:45p<,[|RZq8Ib' );
define( 'SECURE_AUTH_SALT', 'PI=HJx1k$w_2nY8P1-=3Ae@m1&L=+.tDB~-2M&@BbMgwb[0ZyZg~ukP&L2;uAR_V' );
define( 'LOGGED_IN_SALT',   '8;O%Ql7Vm#Lwt;:*Qk#uhtHL#[P_8^hi`faS:0Awao9ZMYt^,LE2*mn|{J9]k1+T' );
define( 'NONCE_SALT',       'U~J=n$dq9_jh #TYaki{bsi*bXd6ntrgXK_-]O.%b9$$[{ZZ`ZX]G{ Sso64S*4}' );

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
