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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'userlisting' );

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
define( 'AUTH_KEY',         '7L|;kSW *&l(K;Jt(ubcAy`p>()1vb;Cc0mG1G7<9~ps3B*aM)zB!nR9AP_6O|Ks' );
define( 'SECURE_AUTH_KEY',  'Gx)0~]G!kop0WjV#%TS]1~(Y>.31b|8D# p8}{TvOCd$,t>CI$dyg.ksif7ve~FJ' );
define( 'LOGGED_IN_KEY',    'nM@#t?|E&N&@kUo0/GO~a~L|NWjN&f+.7/w` wp#G[(4K6GH$Ls<j}:<:2[~O=0d' );
define( 'NONCE_KEY',        '|nb`n8b5+$h! 2RrNEiS%I8p%:xckLP=iiYYkXt@|$Am::E<IwL.Chy_IEl^oF_,' );
define( 'AUTH_SALT',        ':z!=t9E>vF8G/r2E&:Y42bE&v]8p{,q5U?Sj|:`t7GSpFfWE<Qc&mnl!H0ke)?(A' );
define( 'SECURE_AUTH_SALT', 'B:ifz`H3oONa6jvm]YmF*pI+>j(EC_vkU2sssFaPnt%1mgbwwixl=212nW*WOj&(' );
define( 'LOGGED_IN_SALT',   '`)%@OWSatlcHR5=@|h`2$b@Sw(UbhPkN$m%sS;HP1^`+,hmE:/wYm* [AcN6HtO$' );
define( 'NONCE_SALT',       '6{j7KeD{({ZT6~lBku$K}Td`GK!]0I6&aag@6[tS6a[,d>|[hs^^!hEmJLEkG)k4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
