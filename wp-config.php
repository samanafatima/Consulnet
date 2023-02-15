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
define( 'DB_NAME', 'consulnet' );

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
define( 'AUTH_KEY',         'Mx1u^S(z/cn7URbkehOWo-SphOdK!5qHjR=O1Aixx+^Bf9}4Lu9$m(IaeY=2l#1v' );
define( 'SECURE_AUTH_KEY',  'tvk*+CqZ)BGgDtG|2kcDs[oUI&NZ&yNI_MR@Q4=q=CVkNd.Cf$P!(IS*iKA4.WI4' );
define( 'LOGGED_IN_KEY',    '48%nY/}cO@aMG=I7z3$]EKyYY/6i4&Zs4iFt8BkOBl(RDb&-WyBj?dTVl&_rA&BX' );
define( 'NONCE_KEY',        '#i:g-g_m3fKq)}@!SS_V5yfmCg`sYuALZGicOnBGw$lZN3m?Q]s3<YyXI1Uw3z?W' );
define( 'AUTH_SALT',        'j~ZmR+V72}#3uK8m(H57_:u?4n^C2dLhN*@;IBezaEZ[FsC[]x!-;PG&Sjfx<xL2' );
define( 'SECURE_AUTH_SALT', 'T/#Zq{@z#b_{&#Hke{Dy-+V0^s;Q:+uMUNjB5u@aL2k)reW-^~;#8|${nrE6n_lk' );
define( 'LOGGED_IN_SALT',   'SpH%yY?%j(H|2[~pZCVYKC{iwR0Br_!m u3(ljh{`X&()DzM (eG4i%LGiq;F3q{' );
define( 'NONCE_SALT',       'SF}wju.CSW]We5G*t:>;6.DlVP0LiB.~Q!-TW,DyD7jcO^$Z^u|NiNJkih/ZK)+c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cn_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
