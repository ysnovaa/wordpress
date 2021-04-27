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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-user1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cata1234' );

/** MySQL hostname */
define( 'DB_HOST', '127.31.22.52' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'pztOLe9FdD}+kQs(PPis|[QQw*_z~y< 0&9ciqw $9w/4+#Ct@e3**JVhrZ}ufNV');
define('SECURE_AUTH_KEY',  '{ALM6LPAF-Sf%o<+BP]8-P9%WK8Dm!57,?qwON6#kn|P7jR%)~tJNAj}-MyG|f{P');
define('LOGGED_IN_KEY',    'W,$uZ0>{n%!V<MvK(3 ^|LCO>./8Y-N@L2cZZpvf2%Ja#J8v!yK*Pq$-66AQU|2+');
define('NONCE_KEY',        'X>/e|01>K{2bfOW_O>KH4pO0mKU/f,~+?a5ZCW&7rarC[[dD.`YZ{C^+l WHZisa');
define('AUTH_SALT',        'ef|Ab*#$R$<~I}M{Zthnr@=eKy<$H)AHdh*P~>[N;l}uhT1C:5(4pM?t0/Rbsox4');
define('SECURE_AUTH_SALT', 'r3PqMB38IYA*.o&+Jm00nWxKj]|>)/gS@z:$eRh-J.u?bNiU)t+g4A;a<V7.]pL]');
define('LOGGED_IN_SALT',   'bBa~0rm`YGnp@vwrYd9[f)w9Qrf+L4%`FN<:l^fUK *EN%8-&Vnp9L_:][C);TwQ');
define('NONCE_SALT',       '%geB6`o&D+UXZv};c$rnznOa!poC=OQJ[_L+lm]a$C760%Cs w17 -D~r/h[A}TW');

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
