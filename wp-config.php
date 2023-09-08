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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'main_base' );

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
define( 'AUTH_KEY',         '8CzGH)c@-M$K?;pSWFZ/g>TTwLvkk^UYU$3YMV0:QLB`)6!yEjE1!,;l#|;dNL-}' );
define( 'SECURE_AUTH_KEY',  'q43U8Zx$k-E,ZM>jzi$)<D]#-T-Q}K$SilIa!{Qty6%<2(Q:mmT{[6b$+#cAue @' );
define( 'LOGGED_IN_KEY',    ' ,n9852*/r&;;5c@_i(+Xh_aK1F7<650WO}Jmk8}r`mC{~:kU!hpGB  w6huQ<fY' );
define( 'NONCE_KEY',        'jpd0mR|+.R`qU9Kl#~sa|BfcbQa!HejZoM0D,;m>x7`C|e@^<:BE5ibl23wFiiYF' );
define( 'AUTH_SALT',        'hqssw7n|1$9f2%piCWZ/&08i}#*%QmvJ{Bo~u#IO!_GuLX4t_l[g)hdoWa,.a#d#' );
define( 'SECURE_AUTH_SALT', 'lEM|P[-605W3H^Zl:@H<o>SV74b3v>nQ<s_m]$C)7oux)oIt8R;-(jl[ptW={6I#' );
define( 'LOGGED_IN_SALT',   '<Wj|:ko+^YAkVa|[QkTJ=--|V|?pRG%}3dG&JYL>=K-i0F4!IEo3am`MM%YcQ4a<' );
define( 'NONCE_SALT',       '2qg|cyVlfM~YX>Rf8>a/:Toy8g>+D7 0gjNjlOlY&OnFs0&&|{FMYgTrf&$YnfLl' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
