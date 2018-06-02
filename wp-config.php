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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joelylyn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4O1*tfQ4X$t/O|6~iqw9g{@#)$B3J2[}s`),Lr?zHVhZQIKYLIsN0 ~;9bm`GbQ9');
define('SECURE_AUTH_KEY',  'VJ#U-aS~wI@$%jF]^mj}TD:aXn<K`Mf%yN/Z^A-4;a1K3QVm`$U:z$6[WoS5{ei)');
define('LOGGED_IN_KEY',    '{&Z=qi,,wC-Mx*x9`u4}E{_1JR~axq{.-?d_2&%i|LZX}gFjGs7ZT=4v[[&CBodA');
define('NONCE_KEY',        '4J6`J]ZDm)_SF2zSHA,|Nnjb],%2mHR}Ejo-[Q{MO5`~j.d98Fm=g}>R]wY<g3#}');
define('AUTH_SALT',        't;6YT]1iS[#|2#V)Yw(APcvUwx]s&jY;]6tc2nE$%rJ)q3gZb~;(&j -U,fx<<+Z');
define('SECURE_AUTH_SALT', 'VH~Vx<#+I3+>Ih$T0)`e?`e8xs7bjpqOUaa}x|,kJ26gGl+c!eY]vzM)^bF:Y*M>');
define('LOGGED_IN_SALT',   'YdaX;96C4<C_p)V=9d$4spNnXT=mN-4|^BR<U=|EU<MMI3bR/?BmA5Nz8mB<03S;');
define('NONCE_SALT',       '5KTRjtxtM=p.k0OM$L@$.2]fe^sA>a(q vgd 3u[2XOYV!tm;s(&8yi/+cE:$;6Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
