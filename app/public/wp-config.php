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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bs#u]^QX_>;6xg7&;8_5~9E!:#*6WK`7O()ysVV4tL+2|0|Rpgm.Mf]-_.NlO=RC' );
define( 'SECURE_AUTH_KEY',   '{;-[ aAo_u^#=@AlNoF$V$BqmHC3jlK)]No@x6^wG|uCU.GhvFZ_,nLOB.0 ydwp' );
define( 'LOGGED_IN_KEY',     '--ou-X`JGu2#jpu[COQ6F(uK8gS|_M!V|h$Hx</Oo|PoF]AI2)F0MBP@[6xkIZjq' );
define( 'NONCE_KEY',         'aDWSP.axN1ZJ`7LP5YSVu;}&IE>F|D96q{g7o}>pB9XCGVsqtSDEcs2V&`^SJs$K' );
define( 'AUTH_SALT',         'oAng/iXA;$wOccKrt=7u+D |t[ %UHD1WP6y@.18+<f-@9e$vBo(jbS2CF!Vv:jL' );
define( 'SECURE_AUTH_SALT',  '14C7)?t+jU.)5#C[%w?`o[4wwA%JRtLj?B!{?3PrUx?T*7Cxn`d m%7K>h%mXf`s' );
define( 'LOGGED_IN_SALT',    ':#OE_1)hW$un>)koIaF^k|jiie6>(v=Qw79Czl#HvtyF)R3-(]s7Y%amkxW()^CM' );
define( 'NONCE_SALT',        ' FDVLQ{8F<m6:p>a6>)V*]%U`NVqqS+P^tA=f[m9^Xe4:v1ZXG31$O^+7 {PE^(_' );
define( 'WP_CACHE_KEY_SALT', 'T KYji2J|DX|bRgub6Xu?=7lZYd|u$@Uyd+;cf7sz0f3l}sil>*i,oPKc`j(!E3<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
