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
define( 'AUTH_KEY',          '4rRo&k3WFw+bUR{t|>iODshTf?E[m&,`e}M69JlT$e3Sbk#sBC0ST|sxxGBJ*FP0' );
define( 'SECURE_AUTH_KEY',   'zqJzvm;c=?9y0L[R,J>7T^e^+QTu v%a(xxH#qR)(z@BDxtn?j&jH#s{Vs7vi:s4' );
define( 'LOGGED_IN_KEY',     '*sCx^;Sb>TI[w/S]bLU?P -W{<Dm/TLH+}jh%,*MbI1E104]ZFEn4AQ<Buj@3~M*' );
define( 'NONCE_KEY',         'k64lPVzDw[n,#NQF0s+5Q:(_FMm78zy$<Cc/*7.n&^UwuOYn+N1@}fbc59hK_*w~' );
define( 'AUTH_SALT',         '#!8VxQ6L`Z>R*$9?DDhricZH;MS8K!28Ou{v8cGs{?Eba=4>s2IM%UCvJ6./&5gb' );
define( 'SECURE_AUTH_SALT',  '.QxCz>t#T!C{Q^wm0Y*Nj4 :PaXO,)*N7LLY&UWVF1d_,!IdT.FCMYP}ma:B0x:N' );
define( 'LOGGED_IN_SALT',    'YjM&}!OkZ^0=dcT[G{$[.HP_(|6Fe<W2CEc4LoD,+772+>*H*c&7#foOH)N2)lJl' );
define( 'NONCE_SALT',        'JW74^8V]p|0nK=:f%z)e}+AT~ 52>XzpGFF0vl-S=CtjU^@N}E/QhZA%sDH%Xy%z' );
define( 'WP_CACHE_KEY_SALT', '%~/ZBMCg#)aC47ZtfS}Db#HZUwJ(*+#!ofn&1#aro@to^Nz6M;$P 4{ F#T*VNy|' );


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
