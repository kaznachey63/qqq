<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BDpkgh' );

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
define( 'AUTH_KEY',         'Z6lvI530_s@TXA,U_}.EK6b*YvPKE^bs0but<!wHw,2H8FR6e*=P]j]Hoc,&y(wy' );
define( 'SECURE_AUTH_KEY',  '%}Kw>0?M.U%(~_3DHf5YqnBBtX*L*Jvv-[h_i 4zH%Qn]+_M9|G)X2zQt;8Ii8E2' );
define( 'LOGGED_IN_KEY',    '9`_N.3!2#_THNe8kVB=;q]fZCZ=_|f_e<?^`Qmw&D^$6g[[O5x] X2vT`?P?I9V>' );
define( 'NONCE_KEY',        '3Wuz7e~BLl;a}EKyyNp!v}^3X^2YxpY)[so@n}f6<aatniM2PdaMh5vaoN=d&hZ+' );
define( 'AUTH_SALT',        'A8{oWA@quFM1W^}}kPjjWVQX{.QLPmrD7Ryp_9wkR]/#0PW]}>ob0] 0GP.f/^mB' );
define( 'SECURE_AUTH_SALT', 'nMJt$_`l3dUn)GQ[NN|,FV%W^X`b?!Y-1?1G~[,R<X7n![Y{PKSoaEP;^M}07kq2' );
define( 'LOGGED_IN_SALT',   'a>&nuQ4@4}rz<<+XPkW3[@DXPR,v.o)25KsxI7P?ra$CC_M@_71&n<b2rj8}QhU ' );
define( 'NONCE_SALT',       '0{/,sO5AGXX|I 1O>7)u+fnYYdl^}py%5<PFiilsS^J<U1FKFohx!=H4?+J?$P#@' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
