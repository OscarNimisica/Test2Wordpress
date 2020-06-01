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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&=7nJC13O ,=TY8_rLH|$hnB+z.#f?SS3JX4XT9>x`GDd[ZJ`%OAs{9(`q*oo}v7' );
define( 'SECURE_AUTH_KEY',  'L@v{x``6wUKa7Ey&L`O@XNS%3P>]2baQWgZ^HAKHvfR{+Sq*%k/TmY9|e7GhN8Q|' );
define( 'LOGGED_IN_KEY',    'AzCn}E%K3J-Q};Uo5VS;=UF3`*u/vT~hk8-0cbvWwez 8JMd!*6/L90=eOF2.pME' );
define( 'NONCE_KEY',        'G+aanEXFCaXkMJ!k[%=-xZKj2{kU ~2jK1Y:eCKkR&kVyqgn>pbghxe-IRM~V,d&' );
define( 'AUTH_SALT',        '4lVcm<Pv0BuKp- t^;9_m_|k=nV(8,[mrgSnlT=7bGEo0=+Dg4-i>X^fly0=VNq,' );
define( 'SECURE_AUTH_SALT', '46_&A`YZegBvP <2x0<CuPqmin]69>U*MX4y06ev/3krR%CckHru,MH%:Kx:#orf' );
define( 'LOGGED_IN_SALT',   'HFtkGgH:|xL(1mGL2zvtVuj_^B(]>!/P3e7t eWauMFidDgF<(9]%3m;b20fKx|f' );
define( 'NONCE_SALT',       '7!e-MzCO,r/2U-XsOf } f?U,,lqsgk):R_/b$SfAkX1KcElDi6^4[Weyb>5WT,s' );

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
