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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '2Z-vDr2.Y%TWHkHpxuHIW6kVR![Vkl*eydC<C[X~3l5^o+(VakaOzvd`v{*Y;js}' );
define( 'SECURE_AUTH_KEY',  'k]TlRtu}@X/}2H1b]_:m4UzE6`T!%DhP.re&N2%W`d 4tf3h={1`-cdq<-ICv{,r' );
define( 'LOGGED_IN_KEY',    'LIF/NrPN8Y}$}vNg11L=JDfzy U~UNR:{{frDk-f=03Yt.%0R^qnLMLaz<{qYw!8' );
define( 'NONCE_KEY',        '@(xjQnU 0OL?[7+^$)w/lS>icr8w@hAaOmk4ryw/eWt{>e4F@t9cdZOT|`qAk_Py' );
define( 'AUTH_SALT',        '%B_GAS(>Gp@kp=k0rkQyKvVFZw#R`f19{ij!E/lrpE^UCZ+kdVW3GXt600fnys}q' );
define( 'SECURE_AUTH_SALT', '7C{6z&Z%y@,.Y;zbp^EVfWQ1-|;aJdv: (;|]5e+sp!tc8|U41Vf#4R*#Bs]<G9c' );
define( 'LOGGED_IN_SALT',   'e>/%Sh$O+uH<z?b&H=uS?j)Lc<$J-5V+FCyJaY=2Xbx5BJ+Tt0yz:th$EKk8qtD5' );
define( 'NONCE_SALT',       '#pa79E85f&G]YC8X+8A7va*nXEv$1Qelrvj+,5l/q~g0oND#0.m@hM=G(XoG vpL' );

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
