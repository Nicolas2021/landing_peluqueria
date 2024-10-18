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
define( 'DB_NAME', 'beauty_peluqueria' );

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
define( 'AUTH_KEY',         ';A0M23GIpP3!v35/0B7s])+3}4X#JRW?kgg4`}wUkE>QO#,i*CR+~9W#STr sU*-' );
define( 'SECURE_AUTH_KEY',  ']30O=xVtE>QPj<a(z0k3TB?-e1naXhMNY^  =3#.aDx<(euozQE<)nEF{#ea,Vr:' );
define( 'LOGGED_IN_KEY',    's+r-;.k,OQU/*IKc[)7=3./dZ$J@O6~bPX$4.uKtz9*+I*wjtnc);[(;cvF.=@JQ' );
define( 'NONCE_KEY',        '[8Wz~lC`&LoRU8#?k4 4Y2vYgZvl<6E%{n33`wIb>.R5Ueq0*J%@U;u*<HF{ejGF' );
define( 'AUTH_SALT',        '^kjld!,uq&Xao?Be?IiqHPHiUn-=i )]RXv@4d9Y}!KfK`PX;,nmwD1Q(WKMP6TT' );
define( 'SECURE_AUTH_SALT', 'MgfiD7XJU,[}Ga(Xcyvh-=GL,_$W0xquO]l6CA(X#C5_*T-lky}|n!gaxny(KO@,' );
define( 'LOGGED_IN_SALT',   ';6Lx5f7VdT[TxwzjbRl]$=__n$P0 38Pp<Y:?RU}55SW2*lm46b[)Ez7CKb,RhzD' );
define( 'NONCE_SALT',       'FlS^gdFW}DFhpyJNHuo%>WE:,_ID7y{nH?hvI{?6L(? ]ix.5cB%1c(G?`y!gCNU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bpw_';

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
