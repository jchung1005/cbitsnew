<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '9dbcffbaac');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/* Substitute in built apliances */
define('AUTH_KEY',         'ee23818f6d77b7c0fdc3cdec495bedf59aec78a6ef9bcf358f3be21dc41ca63b');
define('SECURE_AUTH_KEY',  'a51b248181a245da04bc1d53b5ac8db38d18620c25547abe88f373863ff3777d');
define('LOGGED_IN_KEY',    '27a837fd93c3c0a103a11ba2c25c6efdc074fc64bf9ba512d0bd1adeedd04ae1');
define('NONCE_KEY',        '0c01187599848698d2f2b9eeb4a015e5a882c61ad4f06cc6813a8d7aabd668ed');
define('AUTH_SALT',        'f42fda0446342b895c3ed1807734b66ac5294ebd626dafb3185e3dbdfcd287f6');
define('SECURE_AUTH_SALT', 'b5ebf10dbd149f2867e5bf00f70c831519204ba1bfa108b348e5467deb34f50c');
define('LOGGED_IN_SALT',   'f3cac80de7972b7925a9b2ad4a2b5296c4484eacd686600f02b49d9d240d95b8');
define('NONCE_SALT',       'de659b7f0aab92bd1f5692c1b2bef9d4badd6ec664450b276a11c7104d5cea9e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Users/jeaniechung/projects/cbits/apps/wordpress/tmp');

