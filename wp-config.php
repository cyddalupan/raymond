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
define( 'DB_NAME', 'raymond' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '3#eE4$rR5%tT' );

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
define('AUTH_KEY',         'sWGPD6XFT~3Ho6iBV(I$^CCJ5PYdk2!CnglL00kpA ATJ~qb%]Mfr-}rs~rAwH[j');
define('SECURE_AUTH_KEY',  '(3t+<`v-EmCHI7s+~Oh:(R2+qVLm:(0G]&)2AnNU}%zIZyOlQu/J^|v{S,dL][(+');
define('LOGGED_IN_KEY',    's=7!TFvBbH-{F:,h=ipC60mn.KQ;D.o`HWyK8{PNr<ElBB=xxzM2-jO7>Nzh-6g7');
define('NONCE_KEY',        'v|9|)fCHB]N#VPENr)t}]l+}&6nL`-`vk{>uV)gPdmVc](fgh8C: s2fpD#&^j^B');
define('AUTH_SALT',        'nD,So9;xr10eWkN)~,2Bo~^fa_FWb3C:p%eE-P/L,]DU1 W$4,Ow9DLc|Go+M57l');
define('SECURE_AUTH_SALT', 'Pw<GE BU(t<Q7GT-s6=1:eu[$XNk:A /sc%c`dbXa!uDsMN2UZKd8uW!8$6/9`+5');
define('LOGGED_IN_SALT',   ';I2KO,R9}h=A3J8[3_n3dF* <.lL#0Uh+Ae aVL(r]NvX5FR+p|qdbp%-lu}>!wR');
define('NONCE_SALT',       ')J4Qb~wGmlva+.1+CC<b-oaruKZgYJI*d }(-R^{$7A47FZ-ezglf?Goq| A|udT');

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
