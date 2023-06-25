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
define( 'DB_NAME', 'e-store' );

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
define( 'AUTH_KEY',         '~ 3v>gH-Pb3y8,wl_tT#um#J_v*;pevG;BE34QHOHm&5mt~opM$ ulvbUH[R8s,,' );
define( 'SECURE_AUTH_KEY',  '!rG/Iixf}I`RB>_.AHs:uM:Z+r%/:6YQ[g`E2a!2kfzrC*a!`%7HI:% -vrdgIYo' );
define( 'LOGGED_IN_KEY',    '-PKLKe#q(Qp}etaX7~BC`lIInq=Q[3 yQ/GG VS7:YWw:4l,ar-ywW+F,DBDlP^w' );
define( 'NONCE_KEY',        'S(j1MmuPq}-OdJ,@e(Gq`7L[h/+r9)on q2dCa2wL[|ls<V]~>)Q<+T^5l!niIx>' );
define( 'AUTH_SALT',        'Wo ^yu+yyr. SSA~HCybk1+s7H~y.r2jOZ%2Yk`.^G`]mw$yR~em&-6URKO1.`qh' );
define( 'SECURE_AUTH_SALT', '_mPN*/jJwdRwP8@y>WEOPN5>A++Ih$z~1(W2]Bbs[L)w.(EMQ>&f#evjm1.%WvDJ' );
define( 'LOGGED_IN_SALT',   'wa_|nulkA`$Cby+MIS)mpI5>V)C#(Vr:]&+U(F-M9AkIvlbJlfd~2=cx5ltdak?`' );
define( 'NONCE_SALT',       '+Pb$;YTO{j+`zfw +EKD;(e63%ph{dYE0LI.c:C(..IRBDj)r^L0GB!1*7}?j5$I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eComSt_';

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
