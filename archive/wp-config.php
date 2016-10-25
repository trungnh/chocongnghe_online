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
define('DB_NAME', 'chocongnghe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Anhtrung2@');

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
define('AUTH_KEY',         ',]4Dj4AKp@oa#H1;4matqC8Z:AlpBh/uS/Rkg}KZiQ/z$]az6<1a_V@A}NcPtpl0');
define('SECURE_AUTH_KEY',  'g6Hcw2Z/[[?Q +-9G8W25H`J37Ai0B*2nU(S|9F7Ace!j$zR~/+zB9{_xJr:^.u/');
define('LOGGED_IN_KEY',    'G#jx-JA1TCg][Kv8k6!1m{U_QZ,&dBW.6jd2}}>/kyi?NJn_~/>F7D))/8AYT(xI');
define('NONCE_KEY',        'F8jv~{+4b]s93 Q`5k<?$l_5/n7`];BoE3CKV@]@NbZzF&zt?ScZ64,t$#duqKvQ');
define('AUTH_SALT',        ')y)tKDb2}`P|H_VO:eR9,NV#k]ba)V8:@JLh<a&~|uE`{Ww0`jz(I$)Z.m-Qj%$?');
define('SECURE_AUTH_SALT', '}52GDG=)]Uuo1^l=JTj9B6ZQn+`|b^I+Z2<u-.2s^Bg$n,y{p)MPf!2c4EOesQJ,');
define('LOGGED_IN_SALT',   'Fl?SyK-~puX~{j]1w]yv}~^GG0sh4P?e(s bQR[vi+J&z<ARl;N8g0$=tu[g|Z69');
define('NONCE_SALT',       'eL3geL)t W4-G6@/q8R`x_1sg@!>O(ISQM`G-gQll+i=ZALf{wHpTAnQ!wxW*<> ');

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

