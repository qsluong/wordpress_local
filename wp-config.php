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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wplocal_testdb' );

/** Database username */
define( 'DB_USER', 'wplocal_test' );

/** Database password */
define( 'DB_PASSWORD', 'vorE95#79' );

/** Database hostname */
define( 'DB_HOST', 'qsltestweb.nl:3306' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'YCGtL+GJ8kaxWA2wZ0Hz5VcxXJtgIET/70+pPzfGmYwo2JbDlFkmS3Rh20gxP2IEDCEW5SfLUd2CtJMjX2Ge3g==');
define('SECURE_AUTH_KEY',  'cghph6pjLHZx+mf+Al86M54yFFM47tYGSg9/GmaJB++cMfKyHy7hfOSmQ6sV/yvxARF8vKFrjT5CLujssT0dBA==');
define('LOGGED_IN_KEY',    'kPVXe4DddM5W0PfCB+uCBlIyyERV90n76ntjQ49h+pr0XZA0J33o1BK8hfxiLzKvRJ4SakMsUJRCacYoWLhrHg==');
define('NONCE_KEY',        'U/WW36cHJnmZ4wH6U9rP2Nf4IZwqOMJtHQoN7BZgn2+8t1TPJBU8j+cgKogeAZENbaabvlX0BEh9nTVH1H+dTA==');
define('AUTH_SALT',        '6JXMGai9GJ7r1TiSUL7APSgCEVfRUGr1een8gO1I8/3Ol1FxhmbJFnr/a0OOvca8xs2XOfcZuLOehwB4KJcKqg==');
define('SECURE_AUTH_SALT', '5v9ztzwBOreA23328ddgSWr0kWMUkVtVreBfAzY1fr+Mr39tu20OaJrK+2dpiGbIJQ8/Ka118eK7TcunUQIv8w==');
define('LOGGED_IN_SALT',   'k/vZEmVFeZef/WrUjWwIT3dESINZmzQ01sTUEmGB9p/IuSjBRZiTZ6dXzhabOQFrZROraK7dJM1gVQfrKkA0hg==');
define('NONCE_SALT',       'dCvhavEY5zFcyHVOtZPG9K0HGhLcdMjK8nlJZbgx7p4uXl6STohy9yZhrRpk2r7mT01br7t9O/yUyR7N40xVtA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
