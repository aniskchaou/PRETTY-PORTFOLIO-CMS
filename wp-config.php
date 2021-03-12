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
define( 'DB_NAME', 'pretty-portfolio' );

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
define( 'AUTH_KEY',         '<x<7]P0HMj;*y1;-VvhOR~KJ;_+N]va6Woj&uOG]vHp<T1SzkcYZFb?/r=i=9dKE' );
define( 'SECURE_AUTH_KEY',  'n@;{`Q3h`>{.Yp#3u3,rBX#|IWHDtYOaeKS&)`.uEqFyg=MN>*$h7Ge^Ofr?CqH]' );
define( 'LOGGED_IN_KEY',    'UUaqV0*]169Mc9:LyA|+ #s9~MF>?1>@h1Os*j&k=w|_adxZ^}dhd-/)y~@kE%n-' );
define( 'NONCE_KEY',        'DN#-caG/!QL:(DGu#t2Z;chT :}?+qqwL]k<[k5,+383o;3pN`?(drZpyrhZ5?sx' );
define( 'AUTH_SALT',        '6xD#+jZ~}d{1Tvt7(pOF`9ND*RexuX$t5 :8fqFT+OTk5+yJSI?2x=/KY@!!;Q4?' );
define( 'SECURE_AUTH_SALT', 'YjrhmH=F>UWYTeNNToqFm7,1[Lr&iunAV<1afHkqKid&cQLm:.^%|$2a#J1>>ZVW' );
define( 'LOGGED_IN_SALT',   'gMDrUtT/ho/V-5V!QfUc1Hv<XB0v0^:CoM}b,{A%HLp1Es68;17^#y8W5*<{*6-{' );
define( 'NONCE_SALT',       'a;X1pQxS&[@A-o=%j8)2R.O:N`Khls2%Lga31ErR(_lc,6qer1Nb.9::s;`_k*J0' );

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
