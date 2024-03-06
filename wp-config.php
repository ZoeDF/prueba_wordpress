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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$6qaK-9tHt0lq7g;+giX}Ww];d*+>53HXRA6UhF8n`M</Y ]58?L.*)~6aRDj1?[' );
define( 'SECURE_AUTH_KEY',  'x8:L7V$?oVh}vh((7&Gx%|#hmgTFA{4y!bhI%=gIy-N-mPey=pCB[l`?Zf0PPYk(' );
define( 'LOGGED_IN_KEY',    'S?$!:>gW%Orq*-r!y*QWA8%`Y6#o7bIL|Q.p5x-r^cGhF**cWIR+a+>a#j#VI|sc' );
define( 'NONCE_KEY',        'sW/!CfvTvs@75$~>o60yYdc8RG:o=@W} $bN;Cb-|Z^!8&_+~kT3KJR~4h[]z>:i' );
define( 'AUTH_SALT',        '.R>e80I2HY;|+Y 7)y2oCR]Pau{i|6swt:LD/xgp:dlk`lt7@=s4~nv;I~chfpCX' );
define( 'SECURE_AUTH_SALT', 'oEBi1tuVi0,zCg0yYHP(Qym7Ya8w rh-+&f^By7>GhN {kIir!h)EJNXb-RTvRly' );
define( 'LOGGED_IN_SALT',   '1P+QkkM ax-0MA}-*%_ PhRLs{zg~Jd#]-,7`p:(ou;cZrxxEIgt69Yb:[U:7,X7' );
define( 'NONCE_SALT',       '9Kv0%YSq/->y}ennNYJGG/&44X=;9GM/8`AFZ3(`UYwsX.w=zY]0;igyAp@)7].}' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
