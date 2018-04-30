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
define('DB_NAME', 'maxwelldev');

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
define('AUTH_KEY',         'HvUKEJ>TuTRE:E+{E^O~cvW_dXN@Zz{` {zrDBg2dVmlsvTYts?:=njZ#p%Q8Id-');
define('SECURE_AUTH_KEY',  '93{Bo.(u~`[Ingp?`I(aK z<JQ[zRjw!HB+[M7Jq)Sjf:&GbE,Gq(rt@R69i2:AT');
define('LOGGED_IN_KEY',    'zJ26@187]X<*dB^)j0NtAq]yomPQBr.CCkn3Q7xs!y%mLQ75n{G}TC?t#s(U.q4~');
define('NONCE_KEY',        '4H9~oE;b8]yhG|<2j!8) x3@H,AI^n~Zp?VpA&Isrd~)1alyK5*)W0!lt7yqA_;*');
define('AUTH_SALT',        '$/oNZO@Lqu`$$E@r[%p)<%}oC>(98saGK7Xr&<e<v!,U@LMCwKsa,.[?@,SzWoes');
define('SECURE_AUTH_SALT', '7-|u& l`;mBaHtnIUwI+V-[60>],UVIW5&o$EaZgaxYn*WiCIyDz}^U~aiO7:g~a');
define('LOGGED_IN_SALT',   '`37^@<U8sEy7Gl-`ZEq k?vM%%gHccW-bg1~~eA78|@P!L)vK 6_d]a`f7`Zt;|P');
define('NONCE_SALT',       'OC#ayY%)M}OJ/V7>NZB>59]Z%(Z8B{#.IF0}3TYhQL#2.!.xeeRwH6iN5EfW#j!F');

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
