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
define( 'DB_NAME', 'astratheme' );

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
define( 'AUTH_KEY',         'H^VAOK P=#FAFltjRgkH]F_qnYRM4 Gy+s=#mSYsvai-*I%U@]PyB0.(*jz1+?6m' );
define( 'SECURE_AUTH_KEY',  '>Qc/p[y2d6hP!z8|>@@={Re|le]v2g}/0UH&T~cKUkkXJbV3<Q~Q;;])_?N_Q|A{' );
define( 'LOGGED_IN_KEY',    'Bxc95lE`C,Tk7t_*{|YNZw[J<$`?VmJ=mzJCUc!Mq&h<UnzxoK%a:f}?b7=LN-x|' );
define( 'NONCE_KEY',        'yR1{h1j2(J;y.CvjrbBW,V)#MF@hbbi`0{+u%WY8e9LYe2|ti4B^A3Z{:,@Sz9V-' );
define( 'AUTH_SALT',        'Ezbws8_|.2#u0Y!^j$V1aMyc5KFo]DanPyeb/Ir+pr4ScELJjt/>mTCb*aF@C@]y' );
define( 'SECURE_AUTH_SALT', 'K3.FG++!QF)Bn1Z<bhI/fF|VC}8!t0NSm(}c!X(w,=sSTl02J;F0F-p(pg2n:H=.' );
define( 'LOGGED_IN_SALT',   'n?W$:a.W439+Oy-3CTc__+4?~K^Oe>kMl 2JTjRF+A{ObRf4`oH*#[mv[UGgq*KL' );
define( 'NONCE_SALT',       '8+_c8j:t!T@jc!L&}0`T>2Cp8aBhe0`W;@pA9rBPnom MP=`m?q,b(Q:>%Wk)9lx' );

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
