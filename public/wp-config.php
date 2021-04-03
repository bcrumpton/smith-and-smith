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
define('AUTH_KEY',         'f6zKWcmS5S28S3x1kFjh0VIUHGbVt9AWR6AqAa4UCJHTDEuz4hTu8tom53u3CMoG3wzRSlF4MQbH7IixJfUOsA==');
define('SECURE_AUTH_KEY',  'EQOLFfMV+XEL/R0o1UDz1dEaAB3l/d6Wv5PvwdYmzvTE+HkA3nsDcxNBUqdJOhgpgbW6AhCaBlDGwxQ4siSkCw==');
define('LOGGED_IN_KEY',    'zRgg3PdwVTuTP893wc4fy6P72/xXhzH4qYTTRiUI2fOF4UnilfjuKdDol81kp+imkB3aljm9AJkz01nXw8VeTA==');
define('NONCE_KEY',        'TGbuVLAJePF7ifhOJiz70pv3K5tRWivB0nUkdrC+yAAd5PNBzrqs4jRSDl0gHpF3H+kJ+BXqnMGLG+tS8/tpdw==');
define('AUTH_SALT',        'dY6miJdpCtxzZES3JzA3UDJ2jJNGXFaT0tK0vueFfKEYzOySgDbzgtkG1cU6BgaWiPTKwsCMS5Sun1oQP3/eEw==');
define('SECURE_AUTH_SALT', 'A9nrpRwHT2zM4V3d210nUL6rWtAX7SjrXNHCYLOXAev6UquHWCqk1hfo1/9CNsn+aBIviq1f1Gb1NkSazzv0yA==');
define('LOGGED_IN_SALT',   'D7SBZYIe+gQ2WYKV2oZAR2p9DSsUurDrXCVPOPP5O6UKIaIiev4XdymKarigotjlWLuXmpQC3+mgF5NoYA0S6g==');
define('NONCE_SALT',       'vglyiTYsWrZTFru6NT/NQ0QOFBP34UpCDKClXCM5emvwya4s1PgNYqOKRyGXeN0PcF+bS9/8+69eagozL7poqQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
