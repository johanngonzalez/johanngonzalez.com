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
define( 'DB_NAME', 'johanngonzalez' );

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
define( 'AUTH_KEY',         ',toUT=K9l0+t;Q,^FY7I%w3ZK).l#+[IUFhrXlB6C`CvMEhSv/s>rvBVyNQ(pA`J' );
define( 'SECURE_AUTH_KEY',  'mTxt&+mm[)J04evsF5D>H5_UL)G~si5+,<qiB>6[W+8mZ{)dnM%aiTf1mY00ck7w' );
define( 'LOGGED_IN_KEY',    'UGBwqaDn0!-00CX3j_^Ntsf,KWh^3&2ilxtd:pYmsXzKa^v:4{z/+E3ihd$m#LA2' );
define( 'NONCE_KEY',        'E*#BZm5kJ3Vbdw-B$U5l>A1iY@B^f9f}=9?/Zm,^Fe<!;srhf|mIiex@2B@AVUIJ' );
define( 'AUTH_SALT',        'J`Typ-pnG*>|hah|xSgafmzo@XF&c8WeNwThVEL/IaZa}Ogh<%1;U#BMp9bOm~j#' );
define( 'SECURE_AUTH_SALT', '?{paujIm#0$WyUcv[2Y>!#pUj6+-qLsKsCp*l9ed`N ZU7HO]:dmQ# ).~B9Nz:Q' );
define( 'LOGGED_IN_SALT',   'o+Tx/;FccIn9P}rtU>%h4?$z=&r2IUe%x?aKf-0t?(a/J5YQN)sA*!nye43-!ejm' );
define( 'NONCE_SALT',       'vcWANr>ZGtK+6VBNw4fXCsr$#R*8~PO/SC{I}XL):3fLY ri?ARn5n21xR`(1ryM' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
