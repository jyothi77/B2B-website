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
define( 'DB_NAME', 'b2bwebsite' );

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
define( 'AUTH_KEY',         'xmKsJ>/+Jj]FO?G.;H7A8CN{R;ykA>@h7;LGYX2]jI)6)vDWJ]5[DvN$}./ ^l5O' );
define( 'SECURE_AUTH_KEY',  '}!4p)/`[`h23>0Q1X,K{?k.L{2v(%Ifnb/_z:@(J&uyR`fS++q(gKJnt5N/2JRst' );
define( 'LOGGED_IN_KEY',    'gMnp}],YqbzY!7t ut`OA;2GF/A%GnmtU|sii/A;;YCs{sBu1JY?;)<}wzU!ta7g' );
define( 'NONCE_KEY',        'ly{.Gu#a:Gw_5ZfJ0g~nL^&82vsVko/`IXg:!%Z/H-$d%|e#@lF)5HFI|]!!mh_c' );
define( 'AUTH_SALT',        'SLVc+^A`c$@}.%%f{s9(jHvId@MJmq<x!P@*wm8nh*bXo6Qb~6iq$~A.93zD}?m&' );
define( 'SECURE_AUTH_SALT', 'C-E;@+*lGh-jB6M_DlfQ;6LPCoGrG~^pLX~P5n5>A@Q7O??9!sjo?[{(8nQ{<H{T' );
define( 'LOGGED_IN_SALT',   '.sVLC~F^D]usf{Kdo:HYD#ZiQOx+w]X7]$s;.C@$98E/ob~1}7n=,oh~kT4N03iB' );
define( 'NONCE_SALT',       '`nhk|L=~)S_U1$L]?0druNjnsJH3E`jD[TtCYwoIAgyEMY##d.UF#i]NZJuRADRm' );

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
