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
define( 'DB_NAME', 'vipsoikeo' );

/** Database username */
define( 'DB_USER', 'vipsoikeo' );

/** Database password */
define( 'DB_PASSWORD', 'lk@f45Fbkb123sd' );

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
define( 'AUTH_KEY',         'dU^7#_21}$EC6Z#CQBp:,sZJwjb}akr#Bj9z_=d|=3U2D@5cNlZ*cD+3?w`S^3Fr' );
define( 'SECURE_AUTH_KEY',  '7?F#]j~byWhs[5;To=/O$88{.gL>.8dwzvs|)PYTdlIAtJu:8n=CSy<P5%MJBgDT' );
define( 'LOGGED_IN_KEY',    '-iu3hO}Uh<ACHzq0]0@![:qgK(jWg>OHVtG:~SHKp/g.?i:(.!&uQ;K_PW%0I9SB' );
define( 'NONCE_KEY',        'c-?7SW5C<Mk%~$Ve6wKSf#d)yl#p60hfh{+~@_z5zM2,3_6x5UIO#MIP0]?r[R*k' );
define( 'AUTH_SALT',        'Y%0pP?+Qd1OD|_x}n{/fPO2]6]u=kVZ-]5r)s_<dE,a:+m?Y|~Y6-d$AX1bMZaC3' );
define( 'SECURE_AUTH_SALT', 'Xewso=]CrvZ=Ei<7lRr>XPOZvO$CQe KWAh)J1lvDXwsJo#@%JiKjbDP~m/OegXq' );
define( 'LOGGED_IN_SALT',   ',v-zD;onDK<YCh43Ufg}z.k[,w+[X&,?)solrg0KC~OJP;Wex/3RhlGp{W8S~ _i' );
define( 'NONCE_SALT',       '0sm30a8P3MFGWK~*-W|&b1Hs4j&#31hT[tSWZh0^+!{8iZgv_ki(*A1(d3]kNrmp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2';

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
