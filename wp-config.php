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
define( 'DB_NAME', 'seafood' );

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
define( 'AUTH_KEY',         'hH/NkwPkL[DrmQ9?(p9``pN$umXYz|CGVr%FIihlQ;-fA/QP~];pP_FG=A$X3Y{=' );
define( 'SECURE_AUTH_KEY',  'I}}Vs^F4C5ejJ)9}.wip;2ww$v5,/oZ9JEEx3_bYVv#2bVk3$8RDw/OkF~M@K}l3' );
define( 'LOGGED_IN_KEY',    '-zI)Uc]:!@dUm 2DP55_M=`p>} Q:XmKGM]MilYKi[p4(*2AyVlVeYs*E08La!Ud' );
define( 'NONCE_KEY',        '>T&YvRSGGC6C;p|1?70~O)GRIlEF92f gm-PkZMJ;Ip2*c%s,/fNyU}b<@iqwc3,' );
define( 'AUTH_SALT',        'M7nr~n@VM}Uo}qA^vP5G{RKa/X<HN%A_bN/RV:G}ENpcTf%o-+#t{gwQda]-l-eX' );
define( 'SECURE_AUTH_SALT', 'Z5BYaum:},s8Z$D2BDQBb%J~UUCS1c^RZ?g {Cr+9i/+&?Wa&En6701Q`ozdJ1xl' );
define( 'LOGGED_IN_SALT',   '~:=9Zl0NYgV@[WFr J/Ffmgxx[2:eQ.N#bG+:cU5n:l|[hthkHJS0s`A9TR fkJS' );
define( 'NONCE_SALT',       '=&Z7PUMVwA|o}}3OJEKTO;Q:ukx[gjo<jQD`ucN[; Pf/cR;l4|h&z]!xH+A|#a.' );

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
