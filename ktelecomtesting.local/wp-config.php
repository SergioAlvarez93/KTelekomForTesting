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
define( 'DB_NAME', 'ktelecomdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         '&x&;E%*B:@B5?bjix,~4>`0tSV5f>WT3C MgagzjL&#irX{4-j3/3#uk_QqH>zQ,' );
define( 'SECURE_AUTH_KEY',  '}.4G+A[#_JPzFdqvX?>!1wHaxgUAGVstPV~rQEJ8Mdm*(k,-b{-,%<hp:610*$O/' );
define( 'LOGGED_IN_KEY',    'PcF_}s|1p.2,@mzw7%sC1gn]k->>R]iTx<MCP(Lj29wBRX- >UW`NT~KAM6*YGO>' );
define( 'NONCE_KEY',        'w^Tp,ttW/iaIu%/PnLY6&6a7O?dAz.K/h%@4_UK53}1U)ib~Ec 6x1Ky~t_ck|4H' );
define( 'AUTH_SALT',        '1KJSm F)>X68uP>vLQU(;?^a-w0i3(vGxcF}}Sq3|3rIHoC#i@U{:MaA<P9^3>|b' );
define( 'SECURE_AUTH_SALT', '`4aWM}R5&,M,RwMM~XPYb6*6WM}ggc:M>ALU7Faf%udy%7tLI/_MW=VcycT;Wn;/' );
define( 'LOGGED_IN_SALT',   'cu|ol+y2<S~;2$wh#:Q(wQGIBaAed5zPGWj;Q@Ni-0t{/|2Xz;WZksBUxkkq>uMc' );
define( 'NONCE_SALT',       '[}2cKF}V0bt@)gW  R/tTx5.!UCnyG7kyZU`]V3h/.LRUlMkEX=k$dE=?lv%NbK}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
