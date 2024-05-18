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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         'eTR8JCnUbxkgBXKXX;0Dfi53D0gx$&Kc,mgZ}!-jM{]X{g4h,N~$7)=E`o=F~|UN' );
define( 'SECURE_AUTH_KEY',  ' =v7,}uL)-)*#!Xppd7yw.vDq&|0<IWT|YXYcWlSJZ98$0]vo%Y2(iYqQD4AS{j-' );
define( 'LOGGED_IN_KEY',    '&U1%TO6(0`^_@2q39KW[VD94d9bz.MNc^0uzR@<([8GLG;@+&b1a2d$sU3iGsK)y' );
define( 'NONCE_KEY',        '[Uo.b^O[jjaj@y<]~=2CoRz{@aVN%IU;ipMHQ|7Q+d6F_.YyTCfmzBev%<fO8$ZQ' );
define( 'AUTH_SALT',        'o*!lmN)8$Qr:BYTxN=/?/a8.VoMWtgMA1r.]h777KdWt2]hi8L2?Q.`[Xgn@`1KL' );
define( 'SECURE_AUTH_SALT', 'BFog!A=CIfQm?IJ5~2kXj={TK&.9_Ysv8 .*/wh,Os{c>YNOl;?LLm07XG^)BIT[' );
define( 'LOGGED_IN_SALT',   ')`AZqCB|/+6(.Q!zc&fvtIiBww}<r~K[H~h/(60ExAyjeso1;Y-):QM$j=un%ToG' );
define( 'NONCE_SALT',       '&{s6T4[G&l#1N*gGrw;aEp.n@p&ax+Z9[,$ZZv;ZfJIMAYZ*K`Bi{L9cr?^zDy]7' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
