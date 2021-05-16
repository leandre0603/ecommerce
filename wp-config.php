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
define( 'DB_NAME', 'data' );

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
define( 'AUTH_KEY',         '!0IMYHZ7;F9c_2-5P=_:ZjjbKw|4U?LYiRy//q?. J$bZmrls/GM.x,>?grPi~Ii' );
define( 'SECURE_AUTH_KEY',  ' yFQK-Tfu4_(4hOG;x*Qn~Bb=>8dsQc=&pB7)&GCe|$x}J]qlA@c~Ebn!UC1rpm`' );
define( 'LOGGED_IN_KEY',    'd!J0Z7YTOCqaDGq{j7M7:6rCD N`MY/V>X]#UW)6/+k|4F0EK&,ygM3ER%lAv<+]' );
define( 'NONCE_KEY',        '|C0%Z=D#|.g%ssb{qp*)80SWAOjL;c)5~jSIUR&jPS<o(P*S9s5nvQ+kimO]tkjz' );
define( 'AUTH_SALT',        'gV{4A^A9&ZcCwETt,PQu{4x?T(S(~<]xUTCOPym6]xfPWQ$>.0F2OkzG_*/:xRV}' );
define( 'SECURE_AUTH_SALT', '6eleW>85A<T oWNLj/tnE<evn@[/VHAVkMvWz3&0ec3sgZwaf+wYr_IA=W4&<CNv' );
define( 'LOGGED_IN_SALT',   'eF0Qh=Z gElxy@YUPFWgct2Pai!m;h%E ?z}7EPxSUf%GvZA kAZ]c.j`xzdvS[a' );
define( 'NONCE_SALT',       'xj+z94]?s<06Wyq/C}%`|H-~:U,>1%.Yn/UhK/x(N5B6lF&}],lks/3tn9;3BB@U' );

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
