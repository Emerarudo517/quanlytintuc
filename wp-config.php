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
define( 'DB_NAME', 'quanlytintuc' );

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
define( 'AUTH_KEY',         'G_X~hQP%^-6.TW[uo=7:jV=&TX_rI.]B.7XKfA~UQry%Qx^=?X8lWKoSrT`GeMM@' );
define( 'SECURE_AUTH_KEY',  '. Foq_|7)!mnh^&{%!D]CdQ^OoH`[<V#k^]jnSmv q2Q< QXiPRJ*&H(Hh|~zPU5' );
define( 'LOGGED_IN_KEY',    'N~1$2h#0Wofgq%0MPdLT/ai13~Z[.y/p@Iso(R^w u#._..KroSUKUY++2mwVyor' );
define( 'NONCE_KEY',        ' mH{E!0PE|-!I:#Gvy]1QKgen6H};c=Dd{dXJL2E:-$t78/0&xMijwf,ej*y`4R5' );
define( 'AUTH_SALT',        'A<QT,tiSg:q;P[g9bar,{r6zS*H1st3/c~RD:2y1Zq(|*&>[qSBBMtlt^p/]tUW]' );
define( 'SECURE_AUTH_SALT', '{+d^X 3nVj;*i?ju@-Ky^_Wv<sn4Sk5T3t$ov0PVi!l$yQv%KIrLUju%Xchw/L n' );
define( 'LOGGED_IN_SALT',   'ChkLa$.-{Yo<T8eU?7g9U-J[zo+x%1AR29E2;X OQrx78&M32q| TY;wGk(X1.Pd' );
define( 'NONCE_SALT',       'MZ37K,lP%Ug$Ae39N@/+aC8sIBD&Y?QzU;im|27aaFhusaXB]@h]|v@_ygnK[zWE' );

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
