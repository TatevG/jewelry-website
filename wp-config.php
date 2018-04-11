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
define('DB_NAME', 'rafaelpivaz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L-|W%8{tQ3P>DJ]uZMA_B4+!.1#i8_Ti]FE23[r6Pb,3{sj_?K`l4C$ aHqMX|w{');
define('SECURE_AUTH_KEY',  'V*09G3pC.A-QsgOjW 7#?{|Pw{donx>:,ZzP6r x4/&: .D}LQ)S.yWo`rasQrBE');
define('LOGGED_IN_KEY',    'AFrfSb86IR~-s7}t72wgT38C3/[` ]Ho~WbErdZGS/sr!BLS~yn(fQY-N>.2c 6(');
define('NONCE_KEY',        'H%QMCxK_`zT5~&gJ6r(S.R<x=w/i]M67DM6SKt$}1BvBbK[K<w/IuEY{)9nf ,xc');
define('AUTH_SALT',        'yWF*$b?kA=D?h[TL,2|^)g.HtRk9Hrl4]U-8FLnf$(xMc9!adQmlTJwj3_3#v,[y');
define('SECURE_AUTH_SALT', '5_|BxSEs^ }>mg@zB1}@7[>]vq(?<t?`JD}=<tW#={H^5vZ[tbf/GcZD6mh*9,:d');
define('LOGGED_IN_SALT',   'k~np0 ;xsUR?tGu}[u$gF{|g d90{ w{A<t8YT..}42)nhK65?N%NE~A7)zq[iC6');
define('NONCE_SALT',       'NEc#A+Nu4%0#ZBmZ}!![5c6yUonida=M?BqE:MIB1/U(a:{b#*<NcA&`kpHvLK8m');


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
