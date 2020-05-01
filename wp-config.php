<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hpotterdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u||vu2#Oe8F~|d+fXXe`]v(/r%=#i^26RInu(3`mwFoIJ}:~XL(p?zhPx{b5pY@8' );
define( 'SECURE_AUTH_KEY',  '{S-J##n V4Mft;krhu4`xk~f$MA(VCkmxkNBl<QF{L}X8-8(w#_q>Xva kH@K=<6' );
define( 'LOGGED_IN_KEY',    'n@G5D=u4.vS7vobSQ%j/Pek;QdkoN``*FbC_Q.clGnfG&;u3x5kuePudAr^mY1TN' );
define( 'NONCE_KEY',        '*iR3.FYQ6H5]Avp`=yr,2y^S%rWYuB/`zRmQ^^I?-BBs,{CfB^)1ucHAQuu6.4lR' );
define( 'AUTH_SALT',        'a!H]Vu>0:TOxfGMkAxAh[=,VLZ.};_4zp{GQf#,^i?d4G&;i]|V0{+,t4_,Q@qoB' );
define( 'SECURE_AUTH_SALT', '-LE7$?+w#&zgfwbBQI =mIy%3q(1.a{G+7:p $r?r_sGi!CpoOE)&/qh@>bwvqs+' );
define( 'LOGGED_IN_SALT',   'N_B|@OiR=0A.nb>3/w(u*R?ZZs]|2W%~B)^a+J$-^doI)`_PaGe!3VX6s|OLBSiI' );
define( 'NONCE_SALT',       'CC1C*#$J; {-L]TBl!YMN-2WBGzeVE[d0<wa@~04xJT04ubq+o|4]o]6hsCv^DDH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
