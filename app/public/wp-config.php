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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '_xWa_aQdJfTWQ-VJI>*v0#^|zROb]B+oX#@*g{:UTy7S3n_u[i[%m~&V[S/nu<3h' );
define( 'SECURE_AUTH_KEY',   '{O=rWPP0%}7TJ$V#~`-wQi%C~UscZm S l.g.$8X(Ibd#UT3uB& >zEc*?5)v,(l' );
define( 'LOGGED_IN_KEY',     'g?:pV%T&/# o/YSb0<RW<iSWRz*o?II+jeuQ0,Yed!YXrq6$~P!f0ws(TIip[cJs' );
define( 'NONCE_KEY',         ' IdFI>[8OerJV`9ybAC~KS0txDl[wrS,!8*o#$B5:5C ?|tV}q~6o/tc&3y3zyX%' );
define( 'AUTH_SALT',         '&5|K`U>Sn<N1 32/Y?UXRr8.!AioVWsJ{mN^;oFO?Y!t4M[$u@JicM;X~=5*xNqf' );
define( 'SECURE_AUTH_SALT',  'ox;/&1_reIw} 5wHi9a:1/E P0m0:3t;`$/g:1mbE%HogUUN(aH2z,aVHFH?A{H]' );
define( 'LOGGED_IN_SALT',    'zuh(n@#w8|`>MiQF(AQF:@gvJ]?s/z@.P0wbdYWNFS*~SXigOwFhr08@+i8bpjnP' );
define( 'NONCE_SALT',        'h:c.E!hn.<7m7!g.|,lOGnUiPSRc4*U`vc/J7.9fV4@`R9S/*YwR|LSJf7L++b]E' );
define( 'WP_CACHE_KEY_SALT', '{KD[}jp#5DYe;kgCbc6];@d*fl dBXh)Yk~I+S[IlEA;BC&+/Z=zdAYo)#L2^J>7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
