<?php

define( 'WP_HOME', 'http://knejpen2026.local');
define( 'WP_SITEURL', 'http://knejpen2026.local');
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
define( 'DB_NAME', 'knejpen_projekt_dk_db' );

/** Database username */
define( 'DB_USER', 'knejpen_projekt_dk' );

/** Database password */
define( 'DB_PASSWORD', 'D39hG5etAfFanwmrRpd2' );

/** Database hostname */
define( 'DB_HOST', 'mysql72.unoeuro.com' );

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
define( 'AUTH_KEY',          '/6MWF4KI/GJ^u8DP-$^%Ee03a_+h#q_3$lg~X*|OqbB;O|r0A<G#~!e*L@>r<}UD' );
define( 'SECURE_AUTH_KEY',   'h|l!*IY @|?&faVVE3*]3V`,]0Z/6zLj0qYO F,+``n7xlnO=H~f0FRXOkquz^]{' );
define( 'LOGGED_IN_KEY',     'YB5ZzxlJ=e02oV0~,[&8dK#:=?8*C*wFsC6-ak68V|Z0oqWZAis r&XQQ_.FGyH ' );
define( 'NONCE_KEY',         'c^>F#boeyNBzpy:ygujaJb<Me*nix!3YyxN&V q?n$J3qBA*8jPcfhwpo42XC+%^' );
define( 'AUTH_SALT',         ' OXH[(4g}5!9.vr7g8LVA*Hf%HM#83(n0j@6G{4F]qK:6kDiR{tA|udt%17  +nk' );
define( 'SECURE_AUTH_SALT',  'e#HE*o~.s%ID/y+^%)gYix1s!H4_#)qRAkRjvsSRrW+>8J*$}b?y2chI{Hu_PMYj' );
define( 'LOGGED_IN_SALT',    '.#~p7buyD@3l:N40**24R:QVSHTKE!W9][f*1TK1 {~NY!7m4_O*kfEd>o-hh]c9' );
define( 'NONCE_SALT',        'Z`6$L2v[;%4smRU7ihds(O13A8s(vQCAI_?<pDT+<KEQ}1Pv3?UbI}(.f?B6[s`t' );
define( 'WP_CACHE_KEY_SALT', '#G{A{Rl}KskwMwFqC@fYFO~p6YsxBMp5<CY!%3HRdgn%;)zSKE~^B8y6d1{Z`YGN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
