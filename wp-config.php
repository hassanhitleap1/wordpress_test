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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'Y(]cee]h)?X,*cvVDYx!O39{UL0*CiBDF=2HxfZkJlD-zwHJhqzLEE<d+4{,gV5d' );
define( 'SECURE_AUTH_KEY',  '^TpiNDW-8:K,HQQKL|$ d96ZUI:P3D*3T400hNrQ2/H=TE9eMM9#z!1=^ 3/@bPs' );
define( 'LOGGED_IN_KEY',    '51b}^95J%Z(?7=$qJ]xm:EDC(%V<XvT$13=40Dvf&%W[W~B>yH.P6;B%LsaLJc>/' );
define( 'NONCE_KEY',        '%|`6`M+3OEj`<$<7e|d*xu$J|O:.:*)l1.-Hev4{gA.8bUJwB|hrJ*u($jx;/nhV' );
define( 'AUTH_SALT',        'jauceIOx^/{Nw}>Iht2N}pvs/!|YL>(_HrVv@=6X^46_t]u>T Ezk8nc<=7y7wcO' );
define( 'SECURE_AUTH_SALT', '3fX(SkdCaPs^^epS?uS,#|_W5{7Xo$A#w8lGKjH.y9igI:,rl9r,I3I);`GJ6a5&' );
define( 'LOGGED_IN_SALT',   'x1#tW-ST0Z-.p{w*[[$-*OMEGXup~VDI^m<PgA80bb(c2uFFm)te`Xo=%g8V%RAO' );
define( 'NONCE_SALT',       'R^E6*:=j--7ZFQU|||:j[SL/zEsE2LXtcW{6)M7)S~]Z0]Z`=MqH_-Px~@WC%M{R' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', TRUE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
