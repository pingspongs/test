<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'vercel-project-2' );

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
define( 'AUTH_KEY',         'o6WyK+4f,`vYYFAP;1!SbQYc#*Twq4YE%|_u/Jny6OS,^S8u?;{ q}wdsnMuFWdd' );
define( 'SECURE_AUTH_KEY',  'p6VvE.E.1oqVrpfrJurr?vHuo8W31RL,MURcqF&(Loc6`74nknlog:R6FL4/x5W.' );
define( 'LOGGED_IN_KEY',    '0-Z@qx)&Ta:,lZ>vaK`]>bLwSB;PccU>$Fj{bX[h dc7hB%O~qQ|:08zn/:[vW7x' );
define( 'NONCE_KEY',        '2RzA)YZ)V1x|J,>pQ D#0jXq,sG0@ 1[#V}Y@B:({1?IYDL<HTfH8L%bXkY3)!0f' );
define( 'AUTH_SALT',        ':HInKbCvZ$iaeHt(_ns%FYNQLc1:*2Yox4cq9v42/~#ECZt-WK)JNyLcnd,#DE7i' );
define( 'SECURE_AUTH_SALT', 'Oh,#[%Y B9xcvZ}A0RnHg%K>UVM`$.l;3{tG-]daDbZfxoX+[?x$5x7DAbPghD=h' );
define( 'LOGGED_IN_SALT',   'KK35MEvc3ZJuYtHp^jw >WJ5[AaVKz7E4uah3*L5Wib~uG|]:e*wV.8bRq$:o`/T' );
define( 'NONCE_SALT',       'BtXXSj]kla~TNX`1]8aYF!p,NuC0mc%PrQCn/9e+3*e7:0-#!H&wNZg~gog`QIEY' );

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
