<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
define( 'DB_NAME', 'marthub' );

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
define( 'AUTH_KEY',         ')Q3elUjtXst#H0,QC52f4*J)mDzN[56dYdu{Zn!86R+m$tu3Lx2YhnU^!c;R@8>t' );
define( 'SECURE_AUTH_KEY',  'fEitjpVQ3cfIuaJO)=<I7iYgD[uYB]Tg5B$}&Yf!ICVXdm7S#rb3AwO2;ZiZ[|AU' );
define( 'LOGGED_IN_KEY',    '&Uk{;$c?C=Sw[&?05M* .g!&x]H=m#hV1P8,rc5oy;:{hE~GZMw;`Fo)])Mw)o){' );
define( 'NONCE_KEY',        'yY!C4&OqUrB+XJ~O.<ukGmzY.5~wsxY5W|M/#QFq]Ig<B)eUq$4K+5x}ef3}S#DO' );
define( 'AUTH_SALT',        'NV2%IphV{<NyVY,n{)1]=w20zMu2(Ku:{^hwO+D!MB|xy$~6lpzX`9Wr-fl0$Foq' );
define( 'SECURE_AUTH_SALT', 'jO`-.p*f/w0DV6=6+EDawo&W)DzJ@HzG,apu-|=!q9s/{gfI2>.8^v{WtYO<3!> ' );
define( 'LOGGED_IN_SALT',   'P f|,R1as@Q&|wK[Y+a<:_SM0V;tdfe5fp?A@XRco=w>[[GYuU$EnHX(i7q9x&CR' );
define( 'NONCE_SALT',       '+#>k;8rb;WC(ea6uX|[>vq_n@%TJJY:$jtM4::VA|@cL@=!Mz[MIe-6P>7WBodp[' );

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
