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
define( 'DB_NAME', 'e2' );

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
define( 'AUTH_KEY',         'P9O;<8#Z)ATqG#[P.-BW6,VY@m7Lr*N;hv;dG$h5`E)l.F00esj[%,J)ADmd4$#w' );
define( 'SECURE_AUTH_KEY',  '!7<{d!PL&(_PpqzK4wK(u?%+xWRFo/r6.eSvtvo7l.((<UGil]]y~4$+2QN2B|ut' );
define( 'LOGGED_IN_KEY',    'xj7OOTZNR9ZmKa-vPBJp~x>a^F@QFYJO-^K&-&%L^CWF&d#uK[AYbWEFDFsAlFp}' );
define( 'NONCE_KEY',        '!~|3$pS4Kc;&9PW>DIS4!1UAu=8)xs3F!K%k3dcl!^*?n:uCyPU~neR$%Y`h?z~,' );
define( 'AUTH_SALT',        'jx-_E4_lUN]U)J*62U%P 6<i>UIOF6em5X4Fq7eR/^sVyB.5,nlEvAE 6azs0xw]' );
define( 'SECURE_AUTH_SALT', 'v>Ga|qhp4ImZ_hR$s*>cu5$UIwrEdbMsm})ZXD7%Y2:grc.6,#tJv..Ss8w66HQM' );
define( 'LOGGED_IN_SALT',   '<#&t6Nt-W4]lX*qUc]0oc}MaztOIvB#|GRH28 &*jHe![yyR=5 i^d$@g[wp-E,.' );
define( 'NONCE_SALT',       '0T?}A.!VEBFZNZaO4j+%G nq4g` TpnxLG8l!pue`R!k&+] y] F*2$%B=Q4d-MY' );

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
