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
define( 'DB_NAME', 'psd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`$5`Ti0/Lqv)6jl[]1_mZRB;FX%eU55OM#`&7!iBi@ruS,[J,`HR1O|%#8P!-}Qa' );
define( 'SECURE_AUTH_KEY',  'Ea$oQ=<44h!Y}G<6p)T3o(ij5.M*{[f`zc6xt8q_ON>3MJNRfY$u=@jqG.MkSYf]' );
define( 'LOGGED_IN_KEY',    '*WC2Y=6+N819[riD8v@2Px|+Bz,.#v).- UD4,UbA}RZ{Nnc`x:h28#B]/X|36;h' );
define( 'NONCE_KEY',        '+kMsC !,?f}OfX-oP*56^eK1cwUr1TX(7@D==9<x(-;lSxjlRWEs=Sh(7f~%f][u' );
define( 'AUTH_SALT',        'QRKtJ&We{%zA[K<sQ>=L3[<>_?=+z6$ GS{67_|apRte{.#PhBj33jVoRf*l`Or5' );
define( 'SECURE_AUTH_SALT', '1!)R: KbB#xXFHw>,D5FD1QnB*4X9sVpW8,Ge-<O&vfY]M?_ZFJhf<i$p/@[4HC8' );
define( 'LOGGED_IN_SALT',   'Y2}5wtP^1#Z]PT g_IHtT0okgZ9QvlT7o]/hc)#`L`^/S6*|:+{#/B$t>gbu?<g9' );
define( 'NONCE_SALT',       '$]1(3L^nx#)mm/o:qM)u-4MJ1F:Uq4lZiq%@n)XtLU(VXOz&g[fw:_#n+.AS}ad|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
