<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u598732773_chTjp' );

/** Database username */
define( 'DB_USER', 'u598732773_PaLbM' );

/** Database password */
define( 'DB_PASSWORD', 'SAP7pxwbbM' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'b^MNL,{ziAp%5P$0<qi+6{xbEV;~$8oXQ=`W)aS*!x>]b5_^,jxRa9Hi=$)7/G/]' );
define( 'SECURE_AUTH_KEY',   'W$);k*2`$~zOKyxbse#-|~eDClX}>[VT!@-%X~h4hd}]#24#_`B1F[Em@vr4/?^/' );
define( 'LOGGED_IN_KEY',     'CRG1A&F0>ZD+^4o3j3~F{nXy^.5FF={5uO8MsVOii0ArY%S&zE.!E@-^:E9g/RJx' );
define( 'NONCE_KEY',         '$t2iIcX7do<Tb(_JhNs3.([~FNo>P/M=.`i,#][dD8?;5}#YsmBca2I_:b:2>WdB' );
define( 'AUTH_SALT',         '7yU{MSWO(bg1myUnv0ZQRY/k4L*p}KEPVseXj:o}~t|!y2>sDh`Vma>P/h<whdYZ' );
define( 'SECURE_AUTH_SALT',  'vKy^!!#i}y=QBSj]MZ}XoO 42D>=?n5`]_t.8j4nf7*U`x)!N21C &^5^C/Xo.!(' );
define( 'LOGGED_IN_SALT',    'n7gtQY/eqD7?HSqS,`7keuL=}>e+umrAlIPpIG+U?y{O`vK<nI!:/nj5lr=Hqi3N' );
define( 'NONCE_SALT',        ';AyYhX8m0rjHcV8<[0a}O|ZL^S_-^a;0oDgK[nD,&@&<KxCw~6o[nj[Nc5r.;i?c' );
define( 'WP_CACHE_KEY_SALT', 'EK|m/Oz^WwO4.oRZSNxe9YTLOFK*.[/rBu5Fr)vmjSfH(N%(1AOY(wRL3v5INrrc' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
