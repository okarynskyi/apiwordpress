<?php
/**
 * The base configuration for WordPress
 * Test commit
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
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'Ij01 &x#g`~DaPxe%Rh#/I&Y}YNgW.&#ywV0:#jK3F]ZmY9Y=~!RW&XiX3=>8[=/' );
define( 'SECURE_AUTH_KEY',  '9.@|Z(-8C(>2y4^!~~jI5ZyUg1wi@O5=3Hor2?Dyz>tUK93ag#!,SP5BAJ?RMXt3' );
define( 'LOGGED_IN_KEY',    'v1=OFh,];ALmM}i|=&bNBHJNx[ldG/!He%}Zq0BFlD?Jy{~Y+7K)M00yBDi^*[B~' );
define( 'NONCE_KEY',        '1Lx.OmP:w0:U*>KKgPj3mcVfAM#a-F%n.`0c9mI`sg)}Tf8#dEKIl mjD<o6mzHl' );
define( 'AUTH_SALT',        '8;q=xwRNaA,5{5>/UCGrg:c035,oM6.GlxyIRWn?+l?##,F{mAa&6:X}RAC/80m6' );
define( 'SECURE_AUTH_SALT', '=G;H;E%:nMEm`/l|%/1+):flS9WA^4OU?ur>?OH<7a!=wc+?].%rB5vGT:_y{+@F' );
define( 'LOGGED_IN_SALT',   'M,yR#%6J`Lx<m82:L4.Ej*T^6P|}=_A|E.oU,<dS}{CJh#Ld}/0gvUC(Fxf5&>;?' );
define( 'NONCE_SALT',       'bCK&txH~uU#GeKuQ=p)(vhaB3;Wanu>D/%S{B/e<p -m8=A[q10+nLq)M?M^gy&S' );

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
