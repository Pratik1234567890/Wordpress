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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'pteridophyta' );

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
define( 'AUTH_KEY',         'WKJ?23uDht%fj45f{vFWOdP=Q,rGlro#hx07[6]0}&(GlpmiFi5(|j.3u+7.1{$+' );
define( 'SECURE_AUTH_KEY',  'o*A:s!EU</lJ>9J7i2e{~P=B4/,GnCz]w%5DYQ_W;(O>%fSwZY5@c4G9[BJXz.yY' );
define( 'LOGGED_IN_KEY',    'd9;G~~@^pn}WR=PW>JxFY_WKwv+I;WDtq+QK5HTX#&9-O(gr|/=j^dX&`(F2~ uk' );
define( 'NONCE_KEY',        'K%Xk~3S]v{NDQ5(y(1eIsLzo|YefEW.C)~!Ny^zOCn>I%&)lXbKAY,[LnMkD9uC@' );
define( 'AUTH_SALT',        'Q_w8Sxd;9i@C[jb!]>i48f`sl4U +sp[6L+QB6@z~9;@7tD~kX.{#^Sn{*OwEUZX' );
define( 'SECURE_AUTH_SALT', '>SjwQYz},wWpO/~0K8wk9hRT?-*moos%-Pjs]{~ @wEZtMJLp dX4Rn~A4TN.|)^' );
define( 'LOGGED_IN_SALT',   'ek~J[3W42r0+m}6|h^IpIDn~2vW*9CQiW1eCmeqI@91#sI^&q`RO0{k.v^/k#16~' );
define( 'NONCE_SALT',       'Z=hzSF]a}:>0;(d2=*c}g4hz$1a7pG)iO&S:s,X`cgBZZP7g|X?$Ho(}t!kx98gG' );

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
