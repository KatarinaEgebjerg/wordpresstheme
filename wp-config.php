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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'V2$0L8>z{H->!R3KYVyaUPV]C<_yTQ]YYvaRDz>hYm`mvS7ns95#&ukz.i5SQXRq' );
define( 'SECURE_AUTH_KEY',  '0/=CYou*=~|lP.{7z9T5}[J,I7cCT~-you#)v=xH;8ewQl%i&HLK5$|TM4yuW_vY' );
define( 'LOGGED_IN_KEY',    'uG)Jvr:C88r=5XC7~`9jHBd9hgeP%zCi)]$4o>W_D-wm,Un x3H>%`L&5s&Nr?m>' );
define( 'NONCE_KEY',        'dydFb[q-W1v {IS7k6 p`*mkDR}4^WD~vyNG/F_*z}/-#ufZB}3 Ed Q)?qzJ|!.' );
define( 'AUTH_SALT',        'sgspZk2d>l4(gAH%|#>$dML0IR8(Wz!t*<&8fuHQc^7gkX[/+-KJYIF-Io^_U(J>' );
define( 'SECURE_AUTH_SALT', '7}z|o/?ZWoZSiol_C07/cfw$~y-3{Dpv>r<#X4ou%=y[% 5`^[M]-:Yefy}J9<w(' );
define( 'LOGGED_IN_SALT',   'Xr*fx7${J2lo3R}hHA.>|S+a=`+3;#SuAd6ZU6Vs}W6l8dl@8%x[~l(r/{-$c#qJ' );
define( 'NONCE_SALT',       'q^,$586>wtqkpizyNJD!tiGmA96^hZ?8IUu06K++-3*EI`&Z<6lFNMJY#D)5z.bo' );

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
