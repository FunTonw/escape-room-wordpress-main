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
define( 'DB_NAME', 'adam' );

/** MySQL database username */
define( 'DB_USER', 'qw321888' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a0s7zxcv' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<Zsuo{ZilDH]9}#ISKgv/3_E9hzX5G{nvR9v},)N?n|+y=*B2LoI8vv5;.ONU9Ri' );
define( 'SECURE_AUTH_KEY',  '{7Y} n5P~/[7sYCW+ezrS`x[[h$>IXgPtBWXB=I-FvFWd*f8Rc~C#g=F9]!.zuN}' );
define( 'LOGGED_IN_KEY',    '@*Kv;|*Ne(^c0O-JyRe;/73Z_ ^!*~Wob!IQ%E%[`ow)eVKk]X%fs]/7hHsGy3cc' );
define( 'NONCE_KEY',        'iaveT#|hnGU7x;F.t5An;*Y(v|::gpG6:;-k8ew~afmFKuNNG~.fN2i1._W`][Cd' );
define( 'AUTH_SALT',        'b(/B5jV,<U<`d]OQpY^b[31tI$?)w4F8j+Y}t1#_UjTD}Q7@S=yZcy[S+LS[pe|q' );
define( 'SECURE_AUTH_SALT', 'tkwU]03~Q6eO{[~)ph)Cu_9nD~z2Q{`XXW3yEhOIh05o;`7cTG`__T-<d dYog<y' );
define( 'LOGGED_IN_SALT',   'm{GCMp^b[8bDN&N8C]p.$7A]ZIUALkmLxeIT4)ANT|s}TrazDH[ig{#QqXh@YH!(' );
define( 'NONCE_SALT',       'vyW1;h@L.?5Q,VLT6nNpoRn{wC-b5&LY7,JtWFgK(WxU+dM|oR[-`Ga7M~r[=<%i' );

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
