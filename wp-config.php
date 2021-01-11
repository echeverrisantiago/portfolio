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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portafolio' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JgWOvclIpqtBKprcEdu3hmuPprKVYYNgxtDXjcxkVpnSV90X3y6BvEwaOFzx7B15' );
define( 'SECURE_AUTH_KEY',  'L1A4jJfoXrjV1qO3Ki1cIaGN8hEzvpAhC0exAuqEjAIhBvl85sQCnFHR6RHXVhPB' );
define( 'LOGGED_IN_KEY',    'SffwibFGFql3y7TKcBbsABDjjxTWpsnuVhrE3BTkIPCowaaETUy41LWB6kGLO8O1' );
define( 'NONCE_KEY',        '49B96XMpuI0kEdqHyIttLMLyQ4HudUv95n3NhBJf8MzEhnJqB5yrrBz5zGT06pzG' );
define( 'AUTH_SALT',        'p210hBXoCXjdnDmpBh6HOcqVnpbuJAD9GoS4TeKUxSDlx0yVWjsFmBjExCQgs3E8' );
define( 'SECURE_AUTH_SALT', 'YRsBQ8bE68QFInIQmg10KSCrVzmZYsLuMkWoSuUhY8PsixD9TEfKJMcnY0u9XZ3j' );
define( 'LOGGED_IN_SALT',   'E3hl2eMJKVVv9ZZNVT05g2an8hEM3azKwcONrvQ9pN7QIXeOBoCKLqPvopDacQY3' );
define( 'NONCE_SALT',       'CFaHMaYIUDyHuzmlybhk6411PdYNaGnwZqvRzZw6SG5oThHAKMQ11jFP2yliCdop' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
