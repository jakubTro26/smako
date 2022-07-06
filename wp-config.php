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
define( 'DB_NAME', 'xtest_wp3' );

/** Database username */
define( 'DB_USER', 'xtest_wp3' );

/** Database password */
define( 'DB_PASSWORD', 'H&IKQk]hLD70J*p1#Q&74&.8' );

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
define('AUTH_KEY',         'ErhzeYZrsApNcDvr7bD4JOoAjhA4DMncaOA374A2hoUy0yWz7oKUGN4sWqvFSh3B');
define('SECURE_AUTH_KEY',  'YdXxrbZphCSj5P07KRtLsFbuTQ2N9HGhNO3z05G1KCOaP2Khg7uQbQ3b7hwQo6bj');
define('LOGGED_IN_KEY',    '7Aee6npwRkQQ5G5qb3ntVtULacKmFnFfFN50biyla5ZsVN751qHkPD3B4uvN2hP5');
define('NONCE_KEY',        'PnrH5Gn7G5QoYGBVqyL0Wt2tvDsFzvb8p5ohWeqMnM2n5kHKnm1OXSfeCOdcCg9v');
define('AUTH_SALT',        '50WWwnXo3Zxqgj12L6J6o5fXpmhqkHwtpyuHA7AKtOmRZ3Nz3uaecOxC8ydgxLXX');
define('SECURE_AUTH_SALT', 'uoRHMP9MvR8OmsVC37LR95rp7bNoXsAb4Aimn9FZYR1k70zA612L1unkvfNlbKNo');
define('LOGGED_IN_SALT',   '0sTTioNHIsJLMyMXl2NLILxw49FuLf2FbyXqOdEpRQc0MdWLIZjhrZJlufi5CmHX');
define('NONCE_SALT',       'oe1JTZw49n64PDuPv7DuexhXf61R0edWE7TxxT05HobzlMvipYAaP5el4GLaIpe3');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
