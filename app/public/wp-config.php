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
define('AUTH_KEY',         'TGsSkEBNzii5Xnt5+fjrioCPDFQ6s5HYVDgcz4or2r5UBIHzWTJQupiYXEkCAXyy3MkegI+ELYENu5vCntbdBQ==');
define('SECURE_AUTH_KEY',  'vQHpMkDqmvOb1eGMnxk/zQfrlQZgyWVZipRYVfKIUudLKb6O0eeSUVFjVLCNX57C2NvJbrtVWtvilj3s+tVgtg==');
define('LOGGED_IN_KEY',    'C7CrpFVSRy2x42OWFotDiLzlTIYF9RMuRHTr5QkCU6poY6L026rnJGvojqBuARETNsSHBvD0W5vt/PNbNRYv/w==');
define('NONCE_KEY',        'GuMEG8Jg9m1r8Z+B8aNfuTKWkeQsWV+zdsIsTTCHMrhO+YfvbiV3XSbfpLjO93weQv9thsx+Fg1mrj6o0eWvqw==');
define('AUTH_SALT',        'JrsFVKrer8otFWDPJqi0qEbRvhcP29uXXOQL0mbB14AMkg91JezITufi27aBsEDguoOYRharAjGaVFSJvImhhQ==');
define('SECURE_AUTH_SALT', '5seWjoN5YXT5gMArIkLYIxAVBdXwFn+xmfbuFb62iTF0wv2s92jLuVRLtIFwRm63sf6oZgVj+fkogkdgM+FKLg==');
define('LOGGED_IN_SALT',   '/BS+x54PiE59J1MBxLeNpjdaWjJ2Jc4YSiOtgSGu0wtPfIBdR967uF1ifHlTsmM7532bHZhZ1jhF8hiaiWOd0A==');
define('NONCE_SALT',       '9/DZDXFcS52ktPefSLWQLdqaDXYzISofhrYbbn0i9/+1/D4YeRCtvOndgf5JWpz+e1NzJYwoMhKFCVjTEM5j9g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
