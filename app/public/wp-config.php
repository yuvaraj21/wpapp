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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'sRdKw1y/gCF91aaDUQ2sJ7fnUQDWfAseepV85ZinjnB3wCmAdpaI/+9zyevK/yLj1xmhK9FYRHEPAuK8g8fgUw==');
define('SECURE_AUTH_KEY',  'lbv2d8krqdDvgyRMo1j9IqIBr+BO/99t165z2PrrTNguvasbzBJResdmV0n1T9DkB/aUZyft8xIZj0LPnXSIEQ==');
define('LOGGED_IN_KEY',    'fNHlgej59ys+IgQ5A/xGNjX0lr+FvXkt/iLnIIW58VF8Qh/ROdneTFEqDuNqqtCXxV4Lh7dvHFWo78BVs+iP0A==');
define('NONCE_KEY',        'QIXmlPUuVYEOeAqOsd6JKSXZXuYeswWhfl/D/PoTxvXtOsH/cEdr4AcuC73J8+b80uztjEzEjeYC9endz/3N7Q==');
define('AUTH_SALT',        'MOGkghyVQZRhIfCM5/FlvbiEHJ61ZoW+KK7W6fVA57ivM9nx4y+L93SOZMC2os/Gk431ONh7xIwzIjMEC9cXSw==');
define('SECURE_AUTH_SALT', 'IfJS2wyFX/PR9RuPZ3Od+nH3TKxgdQsW4Mc7Ai3+QY11BjF+JR8IQ6YyJv8RQhotyKOq3AemqwF+1BlnlwuGTg==');
define('LOGGED_IN_SALT',   'smOBzGO96m54PPjTC1snGFhTEyTxxs4HS6zG1agYoEXQvOr6nbRD5BpkJDT0rvzMBqtLrBQmjyvkB9pNQKyonw==');
define('NONCE_SALT',       '6zbE7lNtRLfldYcqpCWgGMEZAkbD3djn2QVqhA4fxWvXCo7tgpSOaFxzy1MA7LC8B9DXVTHJQLhuQEQVlIekDA==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
