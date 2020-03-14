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
define( 'DB_NAME', 'bgvillas' );

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
define( 'AUTH_KEY',         'r/S<P2G%29zVfrG.E=EN>>Fak(8AH,j9&;+M hq1,Q cgq/>nlX=.>jl;@O^Np~y' );
define( 'SECURE_AUTH_KEY',  'x!Wm-Z=J#iDD+f4X<oZgUspT%rdky!L:W?UCq:1urwGw,u0!.2u6tk#:5G$s`9(Q' );
define( 'LOGGED_IN_KEY',    'TF1EhI+V(5@zD*k,{`30q 7`i,Z>eE&^7X{ )wIaw_,-NQR9.kh7LMdqpyGp)M2O' );
define( 'NONCE_KEY',        '<)PR8:6lCQ!@ECtZ?ne$NMW+D7F$~?YZ&A|u/)W(|oIjyKyD0cnU@y[`0(OA!d)`' );
define( 'AUTH_SALT',        '+u1|%xR5l=&3D&`Y9k`@mi7]o`P|Y Xnl^ec;tI9C=YD^p YqFoYys*4j>~#hq+$' );
define( 'SECURE_AUTH_SALT', '5!`6,z`~|KFJB_A@kwdpE`7OXx3e#A!.&%)EuP;fDPiJkm|<!JIMA&gS+Ub4p:iD' );
define( 'LOGGED_IN_SALT',   ')-IpCp#)F:q>&L6;j0XbOW^O1E=Ibm %|t5T0Jq-CO3<L^ &r:cw81QVjD^XM$+a' );
define( 'NONCE_SALT',       'IG63^Zg#OLI2fJpNiP,NM@:x 0FVpa_.ce>zUg9e%4f@*ldq8V-n(*osIkCm+J4n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bg_';

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
