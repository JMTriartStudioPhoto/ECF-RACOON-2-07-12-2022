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
define( 'DB_NAME', 'ECFracoon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Sd0cK86ArrlHRqTb9DJJ6Ad4Efo5kLsT7E9KqViK629c8EYQ3Aah8mZitbj69Gpw' );
define( 'SECURE_AUTH_KEY',  'l8vGSpLVrEgqxw1JXqITgBuo3mclJxWhaE74Sq4CACrSXcsxbzL9W4Qh2gWSxC1W' );
define( 'LOGGED_IN_KEY',    'r5LleVkLOZs1YYjMnk3DG8GspREGFRqXhPCaAEu45WuHOArM6lAiOoq2D99aIRYP' );
define( 'NONCE_KEY',        'mSjDBdFxU3HCylsIxdBvngWeWEb8mbz1lA8IkcYSxtVFz93qiS069VzZ2RdwrvZA' );
define( 'AUTH_SALT',        'kwcZmaRw5JkOUVQgauJLdiNSEBv9uHnNNOPLrFEPZmTcKsvcrgnlnPpjE2VESRpX' );
define( 'SECURE_AUTH_SALT', 'zCaZHVDoHlumctjrPrPlmbVdRLRmI4b7Yqms9B5QusySFES32iqSOZrOu4dUtJjZ' );
define( 'LOGGED_IN_SALT',   'Qyt4skguoC3wff3fXNtiFWFpe5YanAF8zw7GdsF1YVJ91C71yb9Tav0Gzx8WLkAD' );
define( 'NONCE_SALT',       'pXQLMytsyN93e1QE9O7zhzHj7B9b9YaGSYGxRM1fuBAw7te4vHFaJi5JRUB6dqlX' );

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
