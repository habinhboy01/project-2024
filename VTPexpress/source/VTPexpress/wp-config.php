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
define( 'DB_NAME', 'express' );

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
define( 'AUTH_KEY',         '{fZ5xPr,vVm1FR AlbXY38#5=4fMlr@(fV@p2wkftdT8*4aP-sD7t*bBWUoU5>X!' );
define( 'SECURE_AUTH_KEY',  ']#aEc$bx7/9Gw$Ep[-[z@3MVyeEk=NCee.F#N[/Zf@`z*]KUM_@w}i!V]}aLGw*s' );
define( 'LOGGED_IN_KEY',    '+g(-a`/|Zkz}8Zc8{p.aJ_Jr2-ctW0=i/LV38N,37s:K0WC+c5KIR;4T^}XHj{1W' );
define( 'NONCE_KEY',        'iC>+~F$aZPP^xO(o`]ttl?yD|Nh>caG.8IK%(&b+QtIb+HiN}%AUi[#k|/+DD%DX' );
define( 'AUTH_SALT',        '|*h#:zJ?aLp@)}/~W({Ahi? e.(pC>^3gbuD*nhfG_.-*rxS<cIdyu=D[Ya.b@d*' );
define( 'SECURE_AUTH_SALT', '#^(Q5/=f<r1kX%~XB)|2[XjiP2KB:DmDZCaq=R3)4OY=v]kX~n,thwS7x%TS>Ebh' );
define( 'LOGGED_IN_SALT',   'MB&8X+Kg4=Et;okm765ryHiGD@(f.ZE%v1u?c<Ov;RS3l9C($4^N>r:o2fnpWnM?' );
define( 'NONCE_SALT',       'a&0p>^ =Xwlw O7kVQ*F;r*/A<roX*%wTgY+:5(AW1nr^XJaoz1$YR5I1mwNR^q)' );

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
