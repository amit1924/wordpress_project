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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'ra&LOaOixUb`up(a/FS1~/7..=/s0SAsW6Z*<RVqyor-fC^>Rbrh@sm0yDWRjU!>' );
define( 'SECURE_AUTH_KEY',  'ucX<!SxZXD*0Aq3S6>J-f3cb9R?1BrjxCzs_&eHF~FBNopYJs:1z~@57nq)s%c3g' );
define( 'LOGGED_IN_KEY',    'mhV^3kG5OtEV?ILA]Z8:g3]RNOaS(Aa+VKm~><U/sALKilqutL 0EL$E338ETuA#' );
define( 'NONCE_KEY',        '&-M?$2rvG3CLd~)|8X-HG7g~LkG4)+gmihSKqd>n,ssEm 6$<0Jo+Ql~mym&bVf(' );
define( 'AUTH_SALT',        'OT<bn@|@iV~}%kI_Rgd4}f|xzK}sFzp-Hk{=8{D{nZJ-/^9)61krQwDo5p42^_XE' );
define( 'SECURE_AUTH_SALT', 'mE-nw9/afT,g-F 2x`fiK[<AZ6&1!6-ZTV!3kPg+GT:H|lO-XNnRX!xDExooapNY' );
define( 'LOGGED_IN_SALT',   '-1KVP4RF*] |2db+d6rgE|Fcjtg&%$OZZ}KY;,@S)8w>YnZ>2)`hhUv4!xc>`hj~' );
define( 'NONCE_SALT',       'D$vDsdO4J,LV%ysAL8{UK4sb`:O<mrW)-o9dq?u|8q%4~q8b5:k6u%JUmx]a(htb' );

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
