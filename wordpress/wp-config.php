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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'myp4ssw0rd!@' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'PDW}A&a3i|a,dY4ZSQIru185)%y4>_oZs2n*@rBdGiTn$j/})4P)-z,]jHLU?@J.' );
define( 'SECURE_AUTH_KEY',  '$`7^yW)Rt#FC*A|tPD$#:($bt&u!Fdl*GikH-wa+#OiMwm{`vl IZ)zwqD8 . gM' );
define( 'LOGGED_IN_KEY',    'c<nixiWA|(eo}^NZ3K+ji0WDi~`2a.O1cvF?sVrp|(2]9suiwI--^BBB`b}pawMs' );
define( 'NONCE_KEY',        'ID,WzFeM>-2Pj^DYDru_Pf:gi~Bek3Hfv})%AcSbFCz<%/@=iUH@~]u!$.oNhgX+' );
define( 'AUTH_SALT',        ')1;5r? Uwpa<O~>UjxEXFSc{K> uD.-_hXI* FWR}O2YPf3X5Ce mb2mvS-[UlOI' );
define( 'SECURE_AUTH_SALT', 'P!J<f(dFWJ~5UQBU!ZPxPB,+HE$X_XY`a_>rp|~^0_)c_TLJU?^ONusNA%C}xxSE' );
define( 'LOGGED_IN_SALT',   '8m6>Ir=Q`4g2o%M`yVeSje02xhE&c.g)UQ;AXe$|kh?^07%jLpIo[&}k`2rV^ov7' );
define( 'NONCE_SALT',       'zpw{dLT-E-^V6|N{~JB*NhMUv4i887F/[#</7(Y[_t4>NNK4+dq:`=5l`.C8Gff-' );

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
