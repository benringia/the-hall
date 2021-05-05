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
define( 'DB_NAME', 'the-hall' );

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
define( 'AUTH_KEY',         'LwH R 0uiUF_buoyd8o{92jRQQ;0RueO[H|480R?}BIgUD.*xJR&Nwj!F5l~rp,H' );
define( 'SECURE_AUTH_KEY',  ';)g%}9Y8I_CXrm.$! w)|A L^l>oXl0`Px0RYz/3#1^G> ;Z.2xR~A,v%YcgooX^' );
define( 'LOGGED_IN_KEY',    '`v[jPIsvF+]2q,SheEn/YCWO.MUEqZVc=WtNp&{&b{?$<+oDncrjL} _{*Be3Zv;' );
define( 'NONCE_KEY',        '#5;T[Hvx(F2cDbuw:mqk7h5*?S&xaw!@p+ax:Ii$fYH5Y4[BkGa: >r3V]<378G_' );
define( 'AUTH_SALT',        'j;6o4$R,}_Jq=V)&8,t{w$Bv=y}e3{b.4=roh%4hNR2aez$7<?|MR>h3ofTKc)le' );
define( 'SECURE_AUTH_SALT', '$48}Go}fbE8wf$m;)R?RRV^Kg`+v7o7@`En(`|~5{c^1RSDZhi&I|Ph~YcA+cP*5' );
define( 'LOGGED_IN_SALT',   'ziB9Gw6JfXE3o8LS5De-*>B%,{Y>e#rb*` ,Jd}iym0I^b 1EkN7Q3t)ul&:[(Z%' );
define( 'NONCE_SALT',       ',_]e[p@Z-eY8zr}reN^aBU^#46xXE} >Ee*|*Azou+xwq9wh9=)i+KwTIycWf~;I' );

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