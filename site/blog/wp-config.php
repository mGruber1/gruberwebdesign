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
define( 'DB_NAME', '7144345db1' );

/** MySQL database username */
define( 'DB_USER', 'sql4652298' );

/** MySQL database password */
define( 'DB_PASSWORD', '3yk0e@kc' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqlsvr79.world4you.com' );

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
define( 'AUTH_KEY',         'm?yyF_<[33~_=^G67Q0sd|TiUe$+eH-]YJBeJ9]nuPykE6ZK76l2n]`^G~Yc[gE.' );
define( 'SECURE_AUTH_KEY',  '84Qo[CWp?1n@J7KP+v4NPtS;o.^Rb*/eu4vu^su|aZoxJ$t&z!8{C;WeN{%Ji4/u' );
define( 'LOGGED_IN_KEY',    '~(Y&8T^!-L0!=gaq.Qf1UK}1CIqqgP>,.Y4q:916COFKYpFcA/$+o|]M5(oK;AdD' );
define( 'NONCE_KEY',        '$sNrv@1Xwd-lIy|:uHKHLcpZh2C3=rm^z$}x AKx?c+7IVr-AlX`_<-uh3.@E-KY' );
define( 'AUTH_SALT',        '%wvM~kPxx38D~`DC#kJ$vRutty2:LNVs?-J8op}B(,dg9gX{<K=#4?(D]ctCW3p^' );
define( 'SECURE_AUTH_SALT', '2pE[[Dv|UQRC@y(831b.Nt~f{~ky5?X^nzO{<[U`62C (a/gzo%MlBR55PI:dEYp' );
define( 'LOGGED_IN_SALT',   ',|qq+*vu7vTVhkg}.Du#Zm4,:J#63[],&L=4sGxoLNs%>,e^4k.|xunokJ|&=rB:' );
define( 'NONCE_SALT',       '#S9~|chy]Q2vc0dx4)k%%Ct0wdh?IhA^(_aVVj3-5Sbe_=}o+Mj]6!qS`g=X=j|_' );

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
