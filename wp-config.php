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
define('DB_NAME', 'lawyeria-lite22');

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
define('AUTH_KEY',         'Z1Wlh*diVtu0KAAX|h[t,doRmA#7oG~R?tBA^Eh}:Y?!:)dbwIPw[]!qJ.WNg}vI');
define('SECURE_AUTH_KEY',  'i>) Q<P7K|w$y|5LO4s!?RS|}uPI&hWl.#v$@A0Caz`2Udq/l ixv]bnvXs]czi$');
define('LOGGED_IN_KEY',    '7U_r|^|#Sgv $BnJo-e0rw_!*~itfqi N,BX,^g3B}v`~34(KP#lR}x@ *0Anor;');
define('NONCE_KEY',        '2g|nE0EY#$&mwH7B-lMAT[X-2^5?1s<A^D+6jEs,33gv[=e)+a#AXc^OpcvD >lF');
define('AUTH_SALT',        '@mi*/8:xToC05kk<1kc-gfz:Wc`CIG|2Fe}|=ZG~j];9DU3*8AA-Kv`K${hiWE&Y');
define('SECURE_AUTH_SALT', 'Z].yWm!k7v^zXyII64q3yhz4&BXhdD;arU8#M_ic82;G{3;HLF2, Jg,~/:V4YZH');
define('LOGGED_IN_SALT',   'G:&0joMY3}bfo4~S=C{V*dY^@+n3&t(1lW$H&~hY}&pyRz`Nl_c]A<>kO=fZUi2V');
define('NONCE_SALT',       '(cFsN)K .-ieYv!<7dfnU-X~[}4m{,M)9Zd=W.9GM7*J>ANP{I=rQbP*#FrmZm]+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
