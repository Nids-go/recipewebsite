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
define( 'DB_NAME', 'epiz_24295974_w878' );

/** MySQL database username */
define( 'DB_USER', '24295974_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '955@pS.gpu' );

/** MySQL hostname */
define( 'DB_HOST', 'sql303.byetcluster.com' );

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
define( 'AUTH_KEY',         'hyfswxpchnlw4orpsb9p6dvou8mrufeveuzuaeforczeufch9cvrw0fp53h5i2qf' );
define( 'SECURE_AUTH_KEY',  'gltnu3s8bauz45ii9j7bvpfmuhy4tpcfzk1g5nmbhvjlwxonsvgkupcs9fkatm66' );
define( 'LOGGED_IN_KEY',    'aqvfjuf9dw6maraeppccf3ap6y8zc9decd8pbwixvlgdlk6h2g8p2ibmdz4krthx' );
define( 'NONCE_KEY',        'ysgsgaiqmxhd8nb618h0gdq91fiexrrxq0qztuzosw2s6vgyhhpcrn7vwqvd29f2' );
define( 'AUTH_SALT',        'n68d9djomfpncxwk8vzyekcoqwt7xfs6uey7sfkly9n1bcm5c2vtanxiy9j3rfhi' );
define( 'SECURE_AUTH_SALT', 'hwesqbkxf8pcd1txipa46isowb23pt1oyivlmibj5rh875gqiuyenbvpu38dpkvp' );
define( 'LOGGED_IN_SALT',   '38oeqkhnnvnsvpdjarpmut7x0oumhchwrekso93gbzgvmvn9yvxrl122lifhrw6r' );
define( 'NONCE_SALT',       'j3plhxattlskmraddv4fxw24gm2kakfllekcn68tfloyoieqzpqsbaissqumn3jf' );

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
