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
define( 'DB_NAME', 'test_wordpressbd' );

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
define( 'AUTH_KEY',         'd<ik3&1Gz7;f?)eG0Lnfa|ki+X,o^W6F_W$]z6qrw3xvvz(DQaM8,}y;^CNKS sF' );
define( 'SECURE_AUTH_KEY',  'Q;9MO3q[6HPiS P_m>u]`{,$i{z<R)na&)M8a*oYK6}t)CCcP1I?^9,^eS@)a1jH' );
define( 'LOGGED_IN_KEY',    'i4xUyZUuBcZI=yeCSnb0+T!omLeNemG:5|uYN6lyxa@fFlt:J4|E2-,XcUEGecW1' );
define( 'NONCE_KEY',        'nMIbfI:a1=RFq?DA4&U6:PsG J2,g#12c#CW1hyjdE&f{.Hz:-Xyj|PZG|y-voOB' );
define( 'AUTH_SALT',        'lqfr$a!eiWpT?#x|ZRa{(~&@Cm_`Y^8UOi7> hZm3rN aCAp(VJhp}8P|kGy|=:X' );
define( 'SECURE_AUTH_SALT', 'Rd]X_! +yV6>.Y|c/=/2dK+|RC+~+W:2*upFFTt dDUGf4x8_aDF4IL}{HV3_x8?' );
define( 'LOGGED_IN_SALT',   'Xy[kRW%zx*or=S*E57745z<6m~(w{t`^5<C1G|=ieODi<<{EqIdr54;6h7F(6{aA' );
define( 'NONCE_SALT',       'Av#RXKEnRh;fy2a]/3}kA(:Z,88g[=<wTgKfL}e;(Rj*~B9E1@@gWR[GlCXqdby!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptest_';

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
