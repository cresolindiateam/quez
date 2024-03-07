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
define( 'DB_NAME', 'quez_figma' );

/** Database username */
define( 'DB_USER', 'quez_figma' );

/** Database password */
define( 'DB_PASSWORD', 't_Cq@t#a2S#4' );

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
define( 'AUTH_KEY',         'L7.~0O?RepbJwG;D|v?g==Zf5=U{~{_JSFn) +yS!QT?4ySKV3Y7aqO1i>gdpat?' );
define( 'SECURE_AUTH_KEY',  'cOzc~={=3h5Q.gXdUk<EDf-7o0TZVy#:_90Pm(/`k:ym(0;<jbze9#,tFL/5GO`Y' );
define( 'LOGGED_IN_KEY',    'G4 !tz5y@xRx85vY5T+1DzLGI.m<?@ T)2#un#Qb*h`T2bi1RKaB)4|[xyJP)EC0' );
define( 'NONCE_KEY',        'O~7A;DkEc(<y,;`$+@rAF2#qXV@hw{x|=gLJ.<?Q^[(Ua*zDGfD>}8gE1<aj%.Qe' );
define( 'AUTH_SALT',        'Tv>3s|,rB*x[tpHmIJ|qUjvFIL3U4l*63e8#7e`7*t-yszrYurb]Qc/(r5N.,u%`' );
define( 'SECURE_AUTH_SALT', 'ffu9?_)!XBl&O;;-c^-,TK6CwmwRd@]zc}#@@}/Bo?C8/beOz353 R`YU.ocl}v<' );
define( 'LOGGED_IN_SALT',   '8i+p$UDgdqVwS B)Xzp9MZ5418Q&Ea(QezXR[&sv)7 xt#y>cK0? Xq&8OnQ[c#;' );
define( 'NONCE_SALT',       'gMVfb`N.{a~@ffq7ik{,8ZkX@K=wMwPPA{o86zOi1Kga7.i9W#22eZ M|cFtMt.,' );

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
