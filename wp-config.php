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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'KEM|]Dgx`]@9Snj,G87!Q[9PC0o.]J_6Sk94e)J6aM=sK5]x4GqF*HaUD:-}<q[V');
define('SECURE_AUTH_KEY',  'U-GTP$Hi|B^Yo=pjc 3Ej5FJpGL+FdW}x!v7=>vo0yj@%_kW5g*f;ArRpY(3nN?k');
define('LOGGED_IN_KEY',    'jIn|Qerb?^$But#JzqqQk`qp$C=`i}%LH32L&w~bs$#]EI*t;zoKVJRq2.xZs)wF');
define('NONCE_KEY',        '3j]*ud<Ax5w_ZkDWln%3+H3<hGhj8?<C$N(i_K0DbaKFgBCIhgVY|`67qI-0j5Fk');
define('AUTH_SALT',        'Zt.UkM-++E3F=3XmLE;LDq4F$:!Ja(nw#>ve;Z{{a&5b|j3P.XLi[Ea^a0VY[!hN');
define('SECURE_AUTH_SALT', '_#9L!w5$g0+[<MEr(Fkq$>r_*2G/N;3i($boR:ZO_h8Gvn.>^o}:gBe)iEqS<i]u');
define('LOGGED_IN_SALT',   'W[pk6X]},A@`XREdu@]x}xH8mW* %bC[7xQvRV=1uL]>au/v`JyOJ^F8XKr}=33W');
define('NONCE_SALT',       '>T|{8B>e%k1~iW|E(v5?a_:UcpYPxK;(iV`orxYQ?%SKJ?)3Kr7RYdvKo1=]P3dt');

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
