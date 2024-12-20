<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9V@P.|R7wBFM_pas|$=|Dcr,U*{jWagp2A,r=s}V Ti$/C#jv[!up;+$wnLx)#0D' );
define( 'SECURE_AUTH_KEY',  '%2<RcWsSctwnz-dx?Q%@cGvgJ_MwvWB29.o/S;:[_w[G@3/G~trLJQKjXT+:v0-O' );
define( 'LOGGED_IN_KEY',    'b?~)LqN?E .d50D/3UYmL)fhbA?6D[aCy%3^6~e&k7D]K^@L|n)_M1]e_<RWp]Ki' );
define( 'NONCE_KEY',        '}4h#@(q@6./]#qLZ+nbK&0):HS$.YKgQ%]51#w>paeo0_uct*[NCS?ak,glDEY7*' );
define( 'AUTH_SALT',        '>JaS*ow~dfUTi;=[D4zPm/0fh2VhOUoSS-|F}4ZLp5#ZMzKXKTrQ~LUSd mv)Syo' );
define( 'SECURE_AUTH_SALT', '.wOYm=Mx(XXt~:,r15S|XR!mU,5~S(y>+mPi#IHx}3M@<df+W]?1lDb#2fLZP7DW' );
define( 'LOGGED_IN_SALT',   's5({K|U#K5D Yf>(Dhts!l_ZICb!KYxr7}.?}z4D%p[*d-d76=$B2}iv{^p?zR/e' );
define( 'NONCE_SALT',       ')%*-YC4FBr(9J.;xPs)H Pb1qey}_FDXrsPy!s{n@3mdL-[M{[TF@:/%_S//<:]6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
