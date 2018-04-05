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
define('DB_NAME', 'locma');

/** MySQL database username */
define('DB_USER', 'ads');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '.zCaj@^2~ekQ/Qx&ih_ez ,~V@?`-is4y;?x;7L|hW=:f!D|CR~C9[vLt~^0C]mv');
define('SECURE_AUTH_KEY',  'BSV@-|I<D8:{KXldNj0jc;#;SJ=u8WGrk>J?(C1=en.=k%^S%o)N]QpNpM,fjv57');
define('LOGGED_IN_KEY',    'iH:qR8>atonLu)R]{Kpx1mGU].rd62LHv&K <D>=vS*HYI3iH,is<ZV^$`]VYf (');
define('NONCE_KEY',        'hClF)1V}`[8$T7ccl0 r>,UyUgA&7[7t/Jb{7*^~~Ji|!>B-R!R(F-dyb7S0RXfn');
define('AUTH_SALT',        '0F7c:MY}YT(!>:_|aSM7hI^^U$?CCCY6%7A!qbtbZB*!KXnR#3zs+C|I7GEL[eoG');
define('SECURE_AUTH_SALT', '#rm0Hdlg&1$n(x!8jft~/]p<vAx| Aj){JR6U|@AoR!px?_m=D9)us!BS8*;2Vr=');
define('LOGGED_IN_SALT',   'v(n_T/74}98:B oTA?:s;K|0[Kk=/Bn(C58.#d5WBJkdt31#^$kteB.sf/Giqs-e');
define('NONCE_SALT',       'QENSh$})}n@LGA^f.Qv sA[7w&)5(B5nUG`{?ep!LH>#C)ma:8G.RSn}m*79|j(e');

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
