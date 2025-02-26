<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sido_db' );

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
define( 'AUTH_KEY',         ']S!^FQps}ANgK_5aP?v| &NAn94G^;phWXk(P>P)7=fQzPcO#{;GSitwU>cUi2d0' );
define( 'SECURE_AUTH_KEY',  'P(P?EB+Cfh#tMussWW.hO*%NN,bw$(Cbq#I]]@D=]/D~_w-07M{c`QqRYhiejbvP' );
define( 'LOGGED_IN_KEY',    '% 4v]&QlOjZFM&#iO]do21r<.M2 b|Oy3[KE)*,dJ3*+}W#.XDqw1JEF1bF=Kn7=' );
define( 'NONCE_KEY',        'w(5]~R2DQnka2d528ZMhTh6Iq#_jD^E0fp#25SCpnZK$T`s>RNU]|q;&DS|/i|]G' );
define( 'AUTH_SALT',        '>W0#z)%stV.H:7D=NParS#4ryjf(I$@ O%>LH.(@xd:Fz7>b|} o6xBQm.|M8c*9' );
define( 'SECURE_AUTH_SALT', 'MM/ py<C}*?Qy?b*U}YYq~XOQ`fuDZ$;L5L2-Tnpw+ch<?TEu2wS@d>C@[`(#!Z+' );
define( 'LOGGED_IN_SALT',   'j^uxUb(33ylW|]^F<iNIEXMlGU4umb(qz@@ P;PMMrNd1;8!{,wqz$/NLRY0hL0#' );
define( 'NONCE_SALT',       'g_6Fd2xP|MZzJ[4Av%i3jIzD?-fz!l!>tV8V3+F_Te}G$:b]3:RzD9M5#RHqnRMG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
