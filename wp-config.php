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
define( 'DB_NAME', 'mybag' );

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
define( 'AUTH_KEY',         '<U*nX9`l4G}p _}`Xu,7?]-wY{Cs3]u?,k3ghc,__bf~$;FOvQ:5IR0atk7[VY]w' );
define( 'SECURE_AUTH_KEY',  '@k)J&D{ltO?lQ9O%*0EL^26d>elV`#<+yv?{&H,F[}=^+*kQWzK}jXpW.]Dz?!};' );
define( 'LOGGED_IN_KEY',    '6^g%*FO&c6pkQ^o<Cx:)CS6s}TEtMmX>zWALrJ_)_;b8H35^bc5x~s&-:7aT9w-5' );
define( 'NONCE_KEY',        '2g`n$zdjuO<$7q }KXU-V>,q*S3i`e:8#n-[$$w>K4S%uWM5n:r!r-rd;;.|)&1}' );
define( 'AUTH_SALT',        'S-e4(E06]fo8ASfP^19Z(Md`T?~{R!d$JTM>IE~|f,O*`K?Z?g@q<x8h@An(Wx;@' );
define( 'SECURE_AUTH_SALT', '(fxf]`,}g_6l-#{zV{?j(m-z0%a,x2)xCjg%LPy%wm6WP%Ok$P?Maqp<>0.e@V*=' );
define( 'LOGGED_IN_SALT',   'F%&Q3^RMvV(Hv-9E Pr5sVt<t<>0v!ULQY;/9#`}-pE%f_ c{KU` p?})<7W1I9J' );
define( 'NONCE_SALT',       '*kc4yLKhbP`/*Z_-b5+LNrp[Z!jrGsVjNI|:|)=fOPF.c1QsNEl><_3m>>c6s8u8' );

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
