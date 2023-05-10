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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Slxv721()' );

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
define( 'AUTH_KEY',         'F<MJL)j%H.[q6WN$T:ypmvjVp{ik!1Cs8s?wC# w6:PA:@A5.vmq(DjTDH_wN5kI' );
define( 'SECURE_AUTH_KEY',  ')?;zumSJ/>)K/DDOZrC9hp(0_z3_}%Ay!a LgVY2J6Zpy$1Dp#of@#$$4pvLuTdi' );
define( 'LOGGED_IN_KEY',    'l]4=.c[j9WvIN u_=nh?>S{xT7{yO5*o(]bLlk4KM*&!J+ ZQCTEmK75E{^gjk<~' );
define( 'NONCE_KEY',        'QqRf{ )Zs7Lxc~W,Z{swy@iT9,EXe`o%A>sSb]N|GBNp_ANI[]ganz*p-x9ZTEN*' );
define( 'AUTH_SALT',        '@;R3hpT{1l~Es_.{3E.jw7GOvm#xR2V6[vsRiL0^Ch|&2UWrZkucUCZvJ>$&I]H*' );
define( 'SECURE_AUTH_SALT', 'l-4 qz%g5>*U_N!A3uGX@V)=eng6.}P1nI^9g._X3wqx]jRrq??Ju+H_SfMvN+>%' );
define( 'LOGGED_IN_SALT',   'ynWKXQ5(Vlk9xA1j$z%~j6+ rS.Ue)];M[P;Y8c_W$ku$rfW:Bb&I*6EzhjKcSLA' );
define( 'NONCE_SALT',       'Wbk]py5Lt>VH}O~08!.Np36Y)s_kdqnGGhf)Mec6PJw-x:Pg]JI`MaNh{:H>lDe$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);