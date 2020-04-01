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
define('AUTH_KEY',         '0dWqhXZJ+H/Y29naMEJpgiJcnYd289bY5HsU7/47qutkKLeKTE++AKO59y6s8l4m1HWnyfRosWLpfLX1juqxRg==');
define('SECURE_AUTH_KEY',  'yr1/nY9+u5Wpl60G1a4AtEyMchh0e3woHi0at7naTDULNPhZPTJWbo60Mr3LMBFdERC9/y1Fs/N7DjM+YBETgQ==');
define('LOGGED_IN_KEY',    '04NUBJKPOKCQKufpxK66tfj+ic8Kmk+v5AXHSJOdPcfHg+LfCMy36vNK2tBhXnBuPxovcObIAs+nKKjXzx8AtA==');
define('NONCE_KEY',        '4GhBCMF0awQyz4aQe0RkNOFeg50vAWeWoTd+r0bu+rvXF7KvutXywmrnRqlNBlksznvZA0GPIYdckAaNr78KJA==');
define('AUTH_SALT',        '8ZoEfLJsSUrUsLSUP9KbYlnIm0DtKz8Lbri5/xmYN4+4jaLtrcH/LhlSGKL3dQjgMFTMoeGesLCm/TYfp7t62Q==');
define('SECURE_AUTH_SALT', 'POtZ3eBLeMP8tPj0ajR24qn4qOjG/5X7V7ZCMuP394Bf1bQeBCF728sMlVgwME/4ruYcp8iIgRGdUki261wdyQ==');
define('LOGGED_IN_SALT',   'LmQealdjQ5W2J310UES8kM+srfH+UbkGddS89qeIbVs/OdWE7FZBo6bV5DDUeDPf79qMaJIRD76DzsKt2y4rDA==');
define('NONCE_SALT',       'cEMHl+irlmR4vguQiXBRX6kHuO6/SmsTSxCYJ6Hq6mAUwQQbJ0SAt/n7uEyKswilUqd3fcmBlZpwPSyFQqoIvw==');

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
