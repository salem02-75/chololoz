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
define( 'DB_NAME', 'chololoz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// if ( !defined('WP_CLI') ) {
//     define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
//     define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
// }

define('WP_HOME','http://localhost/chololoz');
define('WP_SITEURL','http://localhost/chololoz');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'On1HjH8kleR0HtEsvUl819Qjiwhs1fblGQXB7tF1WU6soscvMH3FjHdafQxymELt' );
define( 'SECURE_AUTH_KEY',  '8fvlY0y7vaX3PtxPVHX7PGP0vH0T9Y3w8uWmTpO2AA7QO9nffNUyVNH4hqHXgfaY' );
define( 'LOGGED_IN_KEY',    'SaRIsYN6IhYb6xeWeaCr1wezJqYU84TC8ogPyquQcQLWK3NQQA6T9mMzTdJ9OOBa' );
define( 'NONCE_KEY',        'KqAmxnpU82yJqtRzkgufMQZqCHUfUWqDLfomOcW0Owvkl2IVbNR9ZnCvuKet7hAR' );
define( 'AUTH_SALT',        'gg0qBJTVBT1baM0FsvqrtEvoPGsaLSi0GNAdXKfStmE0ghaphYCS5DewZV8C9cj8' );
define( 'SECURE_AUTH_SALT', 'Tp5MfFKOin221Yognmz8LXoNJe9orDPzfiC9H5k60CTfRC8m8zXvOlAXuPuVU1zU' );
define( 'LOGGED_IN_SALT',   'Hy3xitFWjOorst2BZF32WuOkCBu7PBnlhIR0O2z2Q2gLXwj3Afc12f6wrkAYN00s' );
define( 'NONCE_SALT',       'PZq1kL1bROGOBaZb923CzL7pbkEBLAAmsZ9kSnJayZP1e7hTrqUflLtDR0RUxxAh' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
