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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '12kn6pzH68EAKDlqEO+iwlGvvVR96+/2l6Bg/i1nT4UczilkX7EhHvfaWENEdvsfldTm3Pqig/VUFnPdUuviGQ==');
define('SECURE_AUTH_KEY',  'ETInUe0i+AeoL4yY2ZpkvCOLDu4/kgDhINlJ/UzjTzn/KKY+80i3JdMTIFqnarIxaPd+hf557raTmO3ZGaMJ7w==');
define('LOGGED_IN_KEY',    'zEihu6g+oZCsC2d3HTCgNYfMUAXGtLxcxG64vciiOMmZv8sW6QkQ0MsI9hgJqsVR8M2Tqi/7zc9STg20+lC60w==');
define('NONCE_KEY',        '+v5BsGAqJi0Q6XZMgVxd0T/3c2GJOrt0ROq0SyCIDIoIkBH2cDRUhRyIPz6SxF//JbPpkKq2n4lqGNiW/00U/A==');
define('AUTH_SALT',        'je3zz8MHWz/4iQFa+K0EuSqx3HNOff3YMT2Gi+nlv/lPeYn6h8xhi/svbmnIGS9hzJ7qTyT2ttMWRu5dYQAmrg==');
define('SECURE_AUTH_SALT', '7Bxdyz3ixScgqvMV+PTmdsZTlmNKQ/o/7EGD5OZSPUrJHDRILDtew55sM9+ny6zNBTtTSNVZsppvsNGfxACdBQ==');
define('LOGGED_IN_SALT',   'a07qpmAbGrnMC11qjzU0cWLGrbn39+XpFiM24VZN9H/dKDs4R0cfu01G2UDpitPqZ1anNIDdD//SdA7lwOCYig==');
define('NONCE_SALT',       'WdkaV7SpHnIgIPs2dSIY07PW02Hh76VLRr6i1pPbqlqwDkYUY48GVho54EjtEBioWXpO+lwV62T+TgBc8P9tGg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
