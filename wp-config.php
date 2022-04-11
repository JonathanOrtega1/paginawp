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
define( 'DB_NAME', 'paginabd' );

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
define( 'AUTH_KEY',         '/<CG(wW jq~GNPajuVKaGRHK,LoE2T:;d-m(Z!t9rtz)y<ChFQpQ,cO5el);rhx5' );
define( 'SECURE_AUTH_KEY',  '0* yhs1>j4=K+J6_h`1:9P{S`@rpIk>vAWwR~#qN`~@FYI&Sq5Z[7Ay8Q~k_U-Ap' );
define( 'LOGGED_IN_KEY',    'd0lYaPC1G#uY007iVMj=K1N$U$P>1(*XLcZ0RHLcC+s6=Upa.K{kSG4I?lanjLO+' );
define( 'NONCE_KEY',        '.D=fE?bDh>~LF>+oOT2I=8D&!2osd/X25|doSyU#w3tYdznf,.LdaZ(6Y%Sg3mrK' );
define( 'AUTH_SALT',        'N;!W=gJ@vM$!9/v2WTb@nF&zUEY5o/+&((pUEhARv.?;tbdoO6{[79pr~mPQ+,}J' );
define( 'SECURE_AUTH_SALT', 'vN:We3N:62`g6B(q8rvf{5=%E9a8d=%B{Im9Z<5tkMmvOvn%>sbIY,tDJ$a?%6bL' );
define( 'LOGGED_IN_SALT',   '>xG<EN+~ gpeVpLz&$vaKcF8(Cb_M3qAtnPEC@YWhNJnrNZdGP)gr]9aNMUW)h8t' );
define( 'NONCE_SALT',       'f h*V?+ )u+V!u 7JC;jgCJ&2OJIb{l`DUDH_QtXKn<?cl?(]Fyw?M<zmcfNG_7g' );

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
