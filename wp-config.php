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
define( 'DB_NAME', 'ara' );

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
define( 'AUTH_KEY',         'Z:oA0AhmMv9^[2~!r&Co^E^*6XX5TU}OS[jMVzxP{dU%e/RM$zx<C0<PI{;rVKJT' );
define( 'SECURE_AUTH_KEY',  'x8wgMG-w;NF?|$=4jO{J&iA5<n{Kw<#`<B#oU@+x);TW!:9o52CIZ;NBEE[e)fIG' );
define( 'LOGGED_IN_KEY',    '{x4e}b`}&7k=R`pj@OGb;j8KPU5|Z5PMcvU$8j9iQT]B01n8S#z&hV<xJx}B&cYg' );
define( 'NONCE_KEY',        '9kP_W=0mXAbcrts4!+Kb=x2*W0hn[;]l_&2mizcX8TW]%k; Wb(<ed/2boX.qU|.' );
define( 'AUTH_SALT',        'plZ!U DtcN/@]/=NTE1jF%3J0%4z=zixMt.OP&K7WEmTS/c-4}6fAw9pC$&]VTod' );
define( 'SECURE_AUTH_SALT', 'ye_Pb:*NCK|C*tjvlmy^ xu|=w{a+nR]$``sO|.$^:Y%v+H ]R|h+PI_9l =, ny' );
define( 'LOGGED_IN_SALT',   ',Y=*i86NLTOfw5 -0])bvq13>:!I~AUAyS]pIZa>+ 1w.WaS#0|~&U-jNl|!{,~L' );
define( 'NONCE_SALT',       '-&&E-UCweb243z_$?#Oc`y7!>9^2Kqc&ZQ]YEPhoI9K=HLQC7a[&xre,8#.7?W20' );

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
