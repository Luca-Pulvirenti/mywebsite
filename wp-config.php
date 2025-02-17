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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '6~nr`YgY~b+x|f]}r$]oOzL!9pNan/hZ(O.D~mvQy}QHrH.g/Bz$-8Vm0pBr1$Qh');
define('SECURE_AUTH_KEY',  ':2As6|!k(By@V(!2<*.:De^^/L>Y%:mYj]il@..y4~!Y18<O3:6|nc3fr#1FstpD');
define('LOGGED_IN_KEY',    'U8IRlglDl8$VausSj=.1sB`>SL=rJ7pv%E+VoeW,+D$asyKx?AHl~11tpvHhqIF*');
define('NONCE_KEY',        'Y]:Yj0O ,BA-+tX$-.9y|b(-#Tq9:g+ nwoi&c_4jZ[aoT:L-pe^}2O@|9 YmOao');
define('AUTH_SALT',        'V |m}|[+zD%+42^jN=I!/8%Ro#]/1I,JhJ%QL$znHm*_R%|M2|_|1}=<KfCRXqq<');
define('SECURE_AUTH_SALT', '[w*|v|5w+3wAh;9F>[05+mkv_L|%1VHPWSw|./tE(0Gv*/[DX(*#90zo+w.2jfZZ');
define('LOGGED_IN_SALT',   'v:*yT/!f8>$6#W9iytcM-@|9J-lxFqp4l_0+}7alk-SpF7A*sBi>$0ox:oSLvQQP');
define('NONCE_SALT',       'e)gc_bP8+_arBy*h7KZ}FKUHrUA$&`*_SC`1sD_e_eCL&Pnl.35F/qh+G3`/:w/L');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_ALLOW_REPAIR', true);