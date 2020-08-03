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
define( 'DB_NAME', 'xdev200' );

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
define( 'AUTH_KEY',         'XCoW(RkGCzigbciq4v&8__E4WoDI#D}oGr-Ic*T;KAe,8*Wcs!=wdtV CW%E f0W' );
define( 'SECURE_AUTH_KEY',  'w qpJ)t]OWsrc|vC4}wf$oT@u%g4adzB1wNSXvE5 ss1IR{A5`XEaHw4zH,a`|k]' );
define( 'LOGGED_IN_KEY',    'NC7_1<uZ<rZM=kc&UGY|);#NjP|Y3F&9)pe9?NPJ,J`JaP&pquq?b0`N)U84`rT(' );
define( 'NONCE_KEY',        'EPsdlT)s-X^G:{~P{6Z8:Z>xW-RbJsngX4Sc!(@E?s!1kV!n0#@5?7g%_/CD<jZ{' );
define( 'AUTH_SALT',        ',w6S50#[SRro3/582=ag[Ewsk=YpVUlK*ydM].9x@i3<nYnDw)ty*{io*D*C{M0^' );
define( 'SECURE_AUTH_SALT', 'kDH8uUWJs)sRRFAZ<~VA*83d^sWwzMYzId?y|?9DV9)gv9F1+wl37N)]tFdgZ0^x' );
define( 'LOGGED_IN_SALT',   '`k[^r76DAQd>)f^Oj{tUtktQ<u]yBlk:1B0ky&#usc6[kg[0#YH~%H!TW?KO(aT$' );
define( 'NONCE_SALT',       '}pG>mR54I+%<,Np9</,.1:s5$5}e:>0PK{nQpHMc:94zydhq&M87<NuCY+D^4kW.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xdev200';

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
