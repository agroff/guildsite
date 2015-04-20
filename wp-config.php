<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'guild');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'retype');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f!{[4Y5!)4H<Vq32=L:CjFDg9[wk}m+7l-e`^&P]s4L .<,aC:y<;+QeqcKS:MiN');
define('SECURE_AUTH_KEY',  '{Ud$3g>D+ZJ<$q?HYKk?*1k%O&mSw^690.uaI!M~`=7+!tg[#])+EvMz3/7&PlG.');
define('LOGGED_IN_KEY',    'k`7D@8F/qt`uqsYbmufz!uZ1_h-i[$RLe)L0J`cjhc*I$8b.%l-0+rB.+1c,1]4S');
define('NONCE_KEY',        'Y{f-*u#}{WU^e[REwWjF9Pa*LJ`0e]L|+EGh|6sR$/]*J<&A.x1[!`}B As|^@p9');
define('AUTH_SALT',        'K}Y+NFYEcIu+-SJvuRkHqA:x=Ix9#>|*%e(@=O,ET8+2ki*GEXJf0v|6+Vjh nNq');
define('SECURE_AUTH_SALT', 't(]8fg]l4a@R)4m@/Dwa~/P%^s(#b:VMCv|=|gQD s+X82l<N:6`Vuw|`e~?)UlD');
define('LOGGED_IN_SALT',   'Muhf+`!c||}X|^+G-Ec&IPRS,k W6d*Q!B1&m-6SHH+<{&PZq+h,>)$YV&N>hWf9');
define('NONCE_SALT',       'LijB^w-V#JyZ-yP }v<426-[A`Ixw+LCW-LXgA9&)K$C%q#&ecv/Sako6qfB;C@6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
