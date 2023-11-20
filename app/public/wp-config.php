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
define( 'AUTH_KEY',          '`2b/J:3U!1A/6vaCB(V:Io P57s>y-*bY6D)`U$e$%>ZjgxUny!k;=!%azbX=bzf' );
define( 'SECURE_AUTH_KEY',   '0W:pjexcRPQ1fZ/_gi!Uh;*-p-AiSeDz+xDKy;#vNsf%CDu..E>Irm)q4~^P/9av' );
define( 'LOGGED_IN_KEY',     'c 5,tGZtGV)s>(`]Xa3t_7u*-3[Cc_F/WHY*x!&n#g|<oVlmsuKmIqd,%WgsGt`<' );
define( 'NONCE_KEY',         'jvk]L.fpt@U__@O%3$+7Q K^20mEf#NX}- F0|!U9=?5}^yjQm0B4X7.W8iVFxwh' );
define( 'AUTH_SALT',         'khTOF@.r6UZ:RM3?QA?HTwy1*ikbH a-ArqDo]=lJ/$ VCazGC~)H?c3Mk,T>f[P' );
define( 'SECURE_AUTH_SALT',  '{jL(%<08.BnK McS]*rfW~(TN*,0KhKZoM= (kJPU?~.5=6+k:UQ26g0(7,H<|VB' );
define( 'LOGGED_IN_SALT',    'i,DySLG.Sc[wR` ]/&}R`%+PGUKyAeT$HWL*TqOIl@ds|7{yX~wjt&Bj-<[`J60v' );
define( 'NONCE_SALT',        'L?wICaQ#U<dZ(jIK9p/~e-sKri}/lb4a0r(_#j`J0%ZW6,~C(5PY5~k=evI)1{F7' );
define( 'WP_CACHE_KEY_SALT', '&j6Sbz&3Zc%i},N_Ea?]71n2]OlC&@Vy`#~Y_#aGpv_cJBT(V9r@U|&72:a4PYp<' );


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
