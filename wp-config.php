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
define( 'DB_NAME', 'pagina_rita_wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'rita1234' );

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
define( 'AUTH_KEY',         'u EE_uS>I&~{#I4+@<s4ID&j|%{U#YSD%?%fA_80<ppEyRg|a8Z?j/_2r#KG;a9o' );
define( 'SECURE_AUTH_KEY',  '2~ -7S1<RyE>,Aj@8bdwC6Q@:T{PI%$@_=[vOOjRvYp{&^uU/mHo~$sRz+O0XPq+' );
define( 'LOGGED_IN_KEY',    ']cOEvsJ^[(^Vv9?gT-^l@36lf>w.d_q|[Q;QB^O6yRXtV7G20N$bhawC3[(qmRDX' );
define( 'NONCE_KEY',        '*d!UWT$&4G1&|EH0{&BbUn1-dzd+VFZ(in.?u~rPn>3K.T$f:(<FkISwz_^qk1^`' );
define( 'AUTH_SALT',        '#)^N.KhqK uS7l{4{y[jy8mBV3D`(S>L#WXEehgF6gF+Ly (S(>RA&Pe_&rM9uEQ' );
define( 'SECURE_AUTH_SALT', 'zUph8vud;Q]gD9I`J-52p[x7}()s#}-Vq8F0x3le3 dAkA/Qv-^S*^oh(|#kcE`d' );
define( 'LOGGED_IN_SALT',   'XH)}Oa,`2<d?J[@Ug.m5svy+j?%MVKne*Bc~BOdkzdYyKwUhJ` cVz]<I>&^$~Y~' );
define( 'NONCE_SALT',       '*[<-=75]8KdLOf+qEgWTl/Okp1#mjsb9$5?9)I*UJ,ubX41&fOVaPRn*]DH:qUL-' );

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


/* FTP login */
define("FTP_HOST", "host-ftp");
define("FTP_USER", "nombre-usuario-ftp");
define("FTP_PASS", "password-ftp");
/* Definir FS_METHOD en WordPress para actualizar de manera automatica sin FTP $ */
define("FS_METHOD","direct");

