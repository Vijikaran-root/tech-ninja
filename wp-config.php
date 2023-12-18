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
define( 'DB_NAME', 'vijikaranwp' );

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
define( 'AUTH_KEY',         '1i!Jqr#.*$Z.L2>`.XuN:>zpl^%eH->*3P&O{>^uu=l{fd{]e1|VUR2Ei*q5Br%Y' );
define( 'SECURE_AUTH_KEY',  'm}T5RXjS=#V/$W@b/e3[=5gn>3YPqtc<I[5SE7UysV<&w]Qi9/v!RaXiA3&:i^JG' );
define( 'LOGGED_IN_KEY',    'VooF@.f!3n_,?^:2{rGTj^/u4^e#fvj<||-yv}}LfEz2)R:S0iA;y+&nJ#V!,[s6' );
define( 'NONCE_KEY',        'b>$/sR98PR@Zi@Vw./X&ITGp27K@YcFdg}WQUpCb?7v|[Iy8CL-B?xd{z^wTOJBU' );
define( 'AUTH_SALT',        'Cjx`A11BsiG^wp[[[9wyRrjb)Tgh&VJZ:h?fLBsK:|E+>y$jNA277k_X9$L3#A59' );
define( 'SECURE_AUTH_SALT', '=]Za{^(Oa vW=`>Y#7Fg1Nyx/~3b,-d3)+h!~Uh{9;&fZMz`2s#c<*^<5[>2epY)' );
define( 'LOGGED_IN_SALT',   'HbN_@_R@k)mW,1>5`q(v=xuj8(iSl)n)g#j~L`5;@K+hU;x&nmkz3:qPV5x* eFe' );
define( 'NONCE_SALT',       '$BTb;ak-%j.-LwGIH{-H2{7:1df S`fLq^9]r.TCU2jv3s]}bk-#${mj`oTH8`Uu' );

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
