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
define( 'DB_NAME', 'xvccpj' );

/** Database username */
define( 'DB_USER', 'xvccpj' );

/** Database password */
define( 'DB_PASSWORD', 'lxM%Jz2A?r@QVfs4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '2bnkw4pukqfhrkbs4xlmgfscruhi74mj38q62hb4851bolrdneopbb1itmzrsim4' );
define( 'SECURE_AUTH_KEY',  'rmhd8bkff5r4hndxiyuz5jzpxhadorolzbj8rrhlffcwbllwfywiawzt2gfkps6q' );
define( 'LOGGED_IN_KEY',    'bzbngt0oj8lgnkfr5zul0fpjwcurrcyhre1o1hmijvjnuddgikio2h6iqc5td6jn' );
define( 'NONCE_KEY',        'oke9pmxf50p5q442n7hvakn7ubtnyfv8ojvrruwj0d7c2idiqvtimgkldexmrdb6' );
define( 'AUTH_SALT',        'rjx4e8fxikncgj4jfrf0cujaon8ay4vy0kig22xufzyjnmq7svm5hijyq2f1uisb' );
define( 'SECURE_AUTH_SALT', '4oucdngg2oipt6vaagjf96yu1vswm2lmqrkxdu4r1eqofssr4auvejvn8ztepky6' );
define( 'LOGGED_IN_SALT',   'm25u60nlnaxlxyypcrxgatt0kcdtigduk2emnghiacimbqv3hkqgvxjvaomxywhi' );
define( 'NONCE_SALT',       'czb4ldc2psvrtbn3hwhiotekvgdbwaph9xpptbmnwvfxbwgo0vwyxgho86ielgag' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/** Allow access from a different domain */
define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'https://teste-interno-2.dev-eleveads.com.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'https://teste-interno-2.dev-eleveads.com.br');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
