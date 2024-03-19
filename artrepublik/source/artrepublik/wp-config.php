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
define( 'DB_NAME', 'artrepublik' );

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
define( 'AUTH_KEY',         '}FQ?9~FNIF9UR`Z$)[wG 9VnVMNMRhNB5so|>M<xK^I7E@#K %^VsnM,4Iw9U},I' );
define( 'SECURE_AUTH_KEY',  'k0V`DBt6Y}oUc[1F0YL<0XKV7Qv^|?gCSExZ]b+3<sU8ZQ3Io`AHqSjyCY6c~,w7' );
define( 'LOGGED_IN_KEY',    'Jd05N8i64j10vi,%@$Y5Xa2)4,/(Tyj&OIv$k{B7jZ:BNtNsQY%uW,x`CCb_iV{_' );
define( 'NONCE_KEY',        'xGVOM}s]xW[SOQ*XHiMzG~}f7A%t&|R&L~]NmhLh,~hh@4rfgCGwqxdF8J+<MCa<' );
define( 'AUTH_SALT',        '>P)1br2^Z8{ISG#.ISQ7kvfRsq: R%/E@-rL<_H|,pos-DvO ^4<q}G]aVvQ[=>U' );
define( 'SECURE_AUTH_SALT', 'RY6^Z3hZI: Iiy@E{hu3+`7gVrC^OQu8Qb/dz`hql^2l2Y@WA?A0q$O|Wb^]CV7x' );
define( 'LOGGED_IN_SALT',   '&GwDJVFDe6]r]yT=w~hoV14K2RU9T2;XskR_aF&!oBN%pWO%RH{V<DNq*zyaxEs_' );
define( 'NONCE_SALT',       '+io~^vDn`}fkg,3xszp@h,F;;?u/{e_Ng6[{5GKN1n7yY(_&_K!+LS+R`IG20+)f' );

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
