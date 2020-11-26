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
define( 'DB_NAME', 'appes' );

/** MySQL database username */
define( 'DB_USER', 'appes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L4teralus' );

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
define( 'AUTH_KEY',         '>UBgP@f9m&$H0^,pX{nfrZ%8<?%!ToG$-ADD.+qUzi<D|hJiT*h{BZB2I44n3:~p' );
define( 'SECURE_AUTH_KEY',  '4u32^q-~tIpTU)#!5Ey>pRHE_ybwkrsW-bjc`t;KA4}.p/V;</zD=<LtcNbT[XK_' );
define( 'LOGGED_IN_KEY',    'nv[]zPA=`u9:#Lk%2ZBi|Q%q+;ex??kaFs:XC+Mwj6VX}!;(Qo1shZ(u+xEO5p5F' );
define( 'NONCE_KEY',        '3[dQf8#:/%g]G{9[Bi/%0g,<huDSB=cjZ}>8.}{M-~3~1msX/6).FA)[%IrF^|H(' );
define( 'AUTH_SALT',        'E$2{C!JU41{H^)(1^`S)OR4/U{]NZj]YO=,z;k,UbdvUdo{nA`zze-z3{ktYIrhF' );
define( 'SECURE_AUTH_SALT', 'E1)v%B5iMeQ*_+(ZoX6P}4WW;q82bt  -Z^GoGiH)v{Rln$lM%t  =$@{5Cn+G2/' );
define( 'LOGGED_IN_SALT',   'e7.UO3rQi#Z6TxODVP5duEs)t-%k*5}i:`b2n6u.Y2l7W7eo=yeVTl#%?X7-^cke' );
define( 'NONCE_SALT',       'LvF*}nl-6c}N3;WPZdu`E%yh/)s%r>XQ_VH-CoW|~@fbI!~dgQ!L+MEWo3KI;mqw' );

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
