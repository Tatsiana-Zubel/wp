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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'JTh*oFoHNY%is#7I%OOH6C&`km#VicIbqKD}V{$k2 m;#Fo Ubzw>> BEO[Vf@T(' );
define( 'SECURE_AUTH_KEY',  'Fh)d0n*#,a?_}+%O+/>P/n~2L,ba}-:p}c7Y&BCc=?dn<?j7]ejFuu{tir@vnB_.' );
define( 'LOGGED_IN_KEY',    'M{lF2X<o(qRo,#?p!3IR){OSqYu5CjtR.pz1-w)1rl#Nke`YvJ2G1ub4V}(6EEcA' );
define( 'NONCE_KEY',        '?yv(?nk5[c9:m*_Gtfgz-QS)kp3!&HK3`E^-d#AjzY`P_AyELA{Y3JWumRnX4U~J' );
define( 'AUTH_SALT',        'K>QD%t|;xX6lu?,RitrHugvI=anpbE~@L sI^yW%q{G5Go:nLjl2dB**@8tB_B^J' );
define( 'SECURE_AUTH_SALT', 's(XPjkO[#m(:5<*m[Tzpp(1N)O:=whwhoY{TddbG,jwF+hOU}$&G63#p^b.P?*3W' );
define( 'LOGGED_IN_SALT',   'ug-1MrPafYcn^`q.>mI29N9&wM}&V@-*yf]:#T?(=a)fS;`(4gbS]K6=rV3r(rFe' );
define( 'NONCE_SALT',       'j$~#MjKGag np`_22ZIttS=lHa`q#FUP>&smC_!,~*U 8tYsm${K=zE?_D6b:/f^' );

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