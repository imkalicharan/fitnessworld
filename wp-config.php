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
define( 'DB_NAME', 'fitness world' );

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
define( 'AUTH_KEY',         'i<R}lQoC}6G[[([E8c)+fetKgqCopt>-HXK{c=?yo0GGtfP62|kY?rqgfR6W~I,6' );
define( 'SECURE_AUTH_KEY',  '>&*IkTMecC,]==7{QNO.?x&=AT&I(}/+Qgb)WePd%R2>/XoJ3BzyDU.b>y!r0d.p' );
define( 'LOGGED_IN_KEY',    '&RU>iJvb8<.3/D@tNMSm_,$cv_,ax7)4i%Bjd,&Dr-f)&wzvDK![I&(MX[H&ecHI' );
define( 'NONCE_KEY',        'wO~Z7q=ZS C}0j);.GP*^?Y&BQupdP+zb&k6c86p97^O=P@{Uzr6340Eh3&E]x/b' );
define( 'AUTH_SALT',        'aFFy33!, /zj#NRK!@uCR>6bl[MO1=.Vd~xq(xhpdvl]RQynD1g:5{Z?&)LYT@@`' );
define( 'SECURE_AUTH_SALT', '/?D&86V!@?aQ5ywN1`AGM.,7^{>vqVj`9IU~}u1;@#,gD Bv$07ru+qg@g-6?3,,' );
define( 'LOGGED_IN_SALT',   '5)}[Y$k-q,]6); d*kHED?-HAN:%G}((aWL$$a:P>m9vKYG?SPqBW|&[QeVw7VE6' );
define( 'NONCE_SALT',       'VpIvf1hfv<hQw;[W!]ezJdb]mtEeZKZ:ya:Zjxc)$L5z3< :y(n%|EBR)`h=9Kt|' );

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
