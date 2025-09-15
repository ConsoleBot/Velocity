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

 //Using environment variables for memory limits
$wp_memory_limit = (getenv('WP_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MEMORY_LIMIT'))) ? getenv('WP_MEMORY_LIMIT') : '128M';
$wp_max_memory_limit = (getenv('WP_MAX_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MAX_MEMORY_LIMIT'))) ? getenv('WP_MAX_MEMORY_LIMIT') : '256M';

/** General WordPress memory limit for PHP scripts*/
define('WP_MEMORY_LIMIT', $wp_memory_limit );

/** WordPress memory limit for Admin panel scripts */
define('WP_MAX_MEMORY_LIMIT', $wp_max_memory_limit );


// ** Database settings - You can get this info from your web host ** //
$connectstr_dbhost = getenv('DATABASE_HOST');
$connectstr_dbname = getenv('DATABASE_NAME');
$connectstr_dbusername = getenv('DATABASE_USERNAME');
$connectstr_dbpassword = getenv('DATABASE_PASSWORD');

/** The name of the database for WordPress */
// define( 'DB_NAME', 'velocity_schema' );
define('DB_NAME', $connectstr_dbname);
// define('DB_NAME', 'velocity_marketing_site_2025');

/** Database username */
// define( 'DB_USER', 'root' );
define('DB_USER', $connectstr_dbusername);
// define('DB_USER', 'cdsuwqksbb');

/** Database password */
// define( 'DB_PASSWORD', '' );
define('DB_PASSWORD',$connectstr_dbpassword);
// define('DB_PASSWORD', 'L2IP71175DP753P4$');

/** Database hostname */
// define( 'DB_HOST', '127.0.0.1:3306' );
define('DB_HOST', $connectstr_dbhost);
// define('DB_HOST', 'velocityma-dd6f63ba1024e919299bcbd4-dbserver.mysql.database.azure.com');


/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define('WP_MAIL_SMTP_HOST', '127.0.0.1');
// define('WP_MAIL_SMTP_PORT', 1025);

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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

if (isset($_SERVER['HTTP_HOST'])) {
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
	define('WP_HOME', $protocol . '://' . $_SERVER['HTTP_HOST']);
	define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST']);
}