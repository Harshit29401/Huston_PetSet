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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divifigma' );

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
define( 'AUTH_KEY',         ']NV9`Uuj9)4Em;QLR4/k]5vq,3pfK,3XQv(8&;Yo8K/bI}et2n$p|^seo2[lLKwH' );
define( 'SECURE_AUTH_KEY',  '7M*haDg-8U`^r_e(HYPphySrl~%DAY~lEff `HFnST3}r2tCZL!JPMF05&{q@.5`' );
define( 'LOGGED_IN_KEY',    'VS9~D:O8S(&L*)}D>VIBr#Q~+vA>e[-bRdjjt.@u/AAFDyMt[|v3UOw}d[1j*7>s' );
define( 'NONCE_KEY',        'y54<U=gBu;l287WHMC2v7X&s]P4/FFOH&Ya>?-qoLEkn)4=kU%nxt2%_5*Lfl.|&' );
define( 'AUTH_SALT',        '#=@]1$#Q}LGXlZYf=7W^mhDc*uF{`|oTm6j},8.!;a:%1}^R^w,Rg$sf pi+5BlV' );
define( 'SECURE_AUTH_SALT', 'JWXz0o,@51&hup*<*+4C!YD8`eJBbB^iWJuHy^8{N1D :5*]0L):RQmAI$_d{C?8' );
define( 'LOGGED_IN_SALT',   'wjf>Y^md/&*4Aci5_}vZs;E+vhDQP.h?^n1aqX%:HIP`h5wZO3!7vJQYO%Q:Kr]s' );
define( 'NONCE_SALT',       'x,v3-Pv_5]GsW$<zKxjdDqI@?gqA0g!q;06<C_EpPr*/&<aw1FLD%X&HLBe9J)D1' );

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

// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', true );	

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
