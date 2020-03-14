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
define( 'AUTH_KEY',         'Lv.MaQ[PftkMqmy*]6#dEokSi,yY;}{iu9!t3aq0of7/IGqKx&!BoKKvL;Ag-*g0' );
define( 'SECURE_AUTH_KEY',  '$1ZUx*;cOqf%>jt^Sj]z[c(x)>IPd=t4?%%+mjJm^t(21yU+w.URUFedh<cIOYr&' );
define( 'LOGGED_IN_KEY',    'P{>_$IWHSxPjXE}q-vQyY7eA8-!,;.bw{+=_l#9$be`!4]MI{J6Z$jax[=J7w*AC' );
define( 'NONCE_KEY',        'un1<LIj;wKo)!I{aS37=@#(p5(Ddu}j%!(C%>H0ipvxNE_K{}f}V9&>g991uJE8b' );
define( 'AUTH_SALT',        'KT@&aJFA3}y8EtGB-,PY)?O}=m4Xb1Fxjy>=,tlTD,<02B17&P>}s.cz>$jjl:3+' );
define( 'SECURE_AUTH_SALT', 'zCQpLV7_bHBG[QHJCSP0#W@T@KdSn/A%ve)i4cGG>hhTstr5p?jNl#^/T-HUfn;>' );
define( 'LOGGED_IN_SALT',   '!-  a5&GxAa6`%=>Q(vE6h1c.NV){c%F2$pbPNR12i?1kqwj2(iat$RC4Y}8u@X<' );
define( 'NONCE_SALT',       'Ru^}fG#6Bfl~]v2LNRn&O/>a7@Ppv$05+#Soh,Z+0?ui0uM=T6,l1v`3=BKP@lsC' );

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
