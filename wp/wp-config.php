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
define( 'DB_NAME', 'joyp4269_wp406' );

/** MySQL database username */
define( 'DB_USER', 'joyp4269_wp406' );

/** MySQL database password */
define( 'DB_PASSWORD', ')1!jSGr14p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xnae42yssl1t8nttce51ibqlmlg4gyk0huvtofh3trfdugcbichnzvdmrrd7eafj' );
define( 'SECURE_AUTH_KEY',  'mi1sodie9qzvfubt3c5zfwhzbkx5sbc5xvhevupizmta20v4apxecyvdnrg29wnh' );
define( 'LOGGED_IN_KEY',    'az4qexi1ugfn9fa9qbqo7w0chxrnkz0tldf3v6rf31ejnwanveyluy5q1n2m7hih' );
define( 'NONCE_KEY',        'htspgyrl98nkvilvtp8vpbyyqevujb52hoizmegrelzx3vg9tobo4cixru0hcula' );
define( 'AUTH_SALT',        'pxxgdbpxoalkh4sdpw66jumynoqddspg6jstpmoezoqc85zphflbl2ixflug9jif' );
define( 'SECURE_AUTH_SALT', '0wmsnopt6wjqotksgmz1p43pi9pxo3wrgqqlsumopyvbhzks5ssanzdpuqx3q1tj' );
define( 'LOGGED_IN_SALT',   '17xhockcmd5wnobayeoxsexjxqgl0bopxfv1ejgtavswqjkmy34pqsejpnp869bi' );
define( 'NONCE_SALT',       'gsuzq201vgqn33zyomox3q6sy643afidc5x7akfjlst2zhcdrk8knn4yp9wr28l4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxn_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
