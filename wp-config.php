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
define( 'DB_NAME', 'ecom_wp' );

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
define( 'AUTH_KEY',         'dd1QV5ax)ue>)Dl-IKH13C?oc3FX4B{e6,mB|JY5Q<t9:WC}3kF.*[a(6I@v&pv|' );
define( 'SECURE_AUTH_KEY',  'hBw4.mE~iM#$@:Ngs<@k(j0l3p}*:PDue9PA!lC|Kn;g_%G9f|P)df_0CT+^mXML' );
define( 'LOGGED_IN_KEY',    '~?APFsUT3wjf8l0s[u+w]wsLy;Z.3p/o /E>)BXoTInNe/j%M_q(02>WPuXGf%hW' );
define( 'NONCE_KEY',        'eOP6CW&!eM;0~Musb%F5A*O:#O.C5j#E#F0c.gZ[<&+C#hJU:28$l_[,qFkRoLol' );
define( 'AUTH_SALT',        'Y*1<MJ!ZkuOitnF7Oyeym`/Q6Po7oPm21X%d&U*rd|OQ)S@KP d+g*5bok[I6}lo' );
define( 'SECURE_AUTH_SALT', 'rU Zflx!b<>WvHyner.zfU{_kZ{I;C:kl.J|c_z+7BaC(WU!W9>$)MF5af&NLtNj' );
define( 'LOGGED_IN_SALT',   'Z[! >8z]jQfb$Jzw aB-4U8*%IUvD2<=.>`$=4_3aFJA! -M 2:CMB3j:hk*4;t$' );
define( 'NONCE_SALT',       's(>&3@+B.*$;b=.YVK)o14MU0QfH@I(qLuEmDnC6f*I.CVD~0q0e]3LdcbZ P|gA' );

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
