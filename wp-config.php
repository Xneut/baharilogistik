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
define( 'DB_NAME', 'baharilogistik' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'koplek90' );

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
define( 'AUTH_KEY',         ',O;|`1GYOrhbX?u_Li2vz[#*n_7o[h%g~ttvB{ih|&a zj?8<{K]`{p,cpIeA9!>' );
define( 'SECURE_AUTH_KEY',  'If<,o=!6omUmCs5<|Oj:k3e%4,Wv$-WW:JMX|049jTf[O~1BY]rZi0qly;18/e>Y' );
define( 'LOGGED_IN_KEY',    '<{A4)2As,)zw,K{sZp=^x+%]vJ%P0^/M{6rFN,%Q9]@9{9~XI&Sjd=<}T:fEG[2;' );
define( 'NONCE_KEY',        '?]i:]>zX>E%~#JClDIw)u n+6DyU6,bv2niR9eXkMU390k6K|u+xKJTI|>)>K.1`' );
define( 'AUTH_SALT',        '.?-![&+*qM;b_d[O{|)8&2o&sv>Y!Avv*g1U$&dB6m0wEYrB/>CyV5i~fONo;g-N' );
define( 'SECURE_AUTH_SALT', '5Wg0~v7+8A@vkKx2xl4$j5Bs^$*J#.CGS$@cU7-BloQ>@rXT^<p3jqxl$6|$Ibzo' );
define( 'LOGGED_IN_SALT',   'p1S/2Yb<5F79=G;SgF!Cl&L.r%d@(h?7/2]Eea[gBO5dejM<%Pv>~8D[Fh&UK9SD' );
define( 'NONCE_SALT',       'J/^S<6+3O)mUA[3KF.#|!vu*XQKout|y~8^Eza..uk^9Sn0 6WAVU;fR~PZ+R/_|' );

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
