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
define( 'DB_NAME', 'learnpluginwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k<e!Pf1`|vTmk$KJ~QmWJP:ko|Rog3ri{*ES&x|1maVU^Jw;k`BjRHTO7RB+EF3t' );
define( 'SECURE_AUTH_KEY',  ']j/v&v*_)Mi$aeCc3G^)@Q,[rD,AqNJCvb]:k H)@=,%//hLBDcge2(<GwD$=Mo0' );
define( 'LOGGED_IN_KEY',    'Uc0#G@1;|9L&rds;etp_0ul)+#Ag4-:{ NFnw|9M`k2Nya3@Xfwu9)ZvDmsRug E' );
define( 'NONCE_KEY',        'wJn_-HY-p})dB_ ?%0H^cGw&ESr%M@]T1.aN|Z^Coq^9mULp2?aVl;P0(FA3Mo|2' );
define( 'AUTH_SALT',        '% 0<XtgoZ5S)Ou Ht3WX.Q=m;b`9pai;WvKIri(r_WoT)8j2uvd3XzpMz,vBb(yV' );
define( 'SECURE_AUTH_SALT', 'gISf_)m9V^=*&YjjQ,G!p=Vg^W*=rIJ!#Wg(Wj71`84q)(7$q493qkYtF3? 37(P' );
define( 'LOGGED_IN_SALT',   'PCaRYTRF=a6W-EGvdf^7WTz9<U!Ksxft( 9FJo(.{O/iBy7|]yCb_-PZ,|djZK(h' );
define( 'NONCE_SALT',       'OJ,^i[4u;C<5g>Ky{N`EJxQ(c$!+9{IwngcZ f-JFii7E6_5Gg) :dUk:dF6bk5{' );

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
