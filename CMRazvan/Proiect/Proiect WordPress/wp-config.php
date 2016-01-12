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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'WL.v>0YHwQ`eXZ-|=I-)obenwLD!M][7]o&tPjH2=8TJ#~XM*TEs3[KXM{+^9o+&');
define('SECURE_AUTH_KEY',  '!SH~44YsZnuO!Dmx}NwT&(TcaHC+;l9jmfly+E2`80jpO8U;yK.q`t@|Eqg,it%z');
define('LOGGED_IN_KEY',    'J$K3o95$atu.I&22Rnb)G9#1IS)XQ$[gCC8)X=lM+H-4F>[[gTI.oDuZ/?+gy1V]');
define('NONCE_KEY',        ':$r9f,n)(Ouj!<@FQ%KkE%Zmz-&Tl}mOM]k>:[j&PzxOVK-a4k*[Jb#HbAYz-DQ/');
define('AUTH_SALT',        'W*>=P8%_< lAOeN rE+{w=Ev8Ml.36-Cx=CcN--aK^x{#}|Hq)iT&Be1fM[R<)p|');
define('SECURE_AUTH_SALT', 'T[Hq+Z_dt6sM|X3-Y;K/waL|yx`Y]#-=?&r|OSA#<.5RX4M;kH?~/1oAr!~eXkL;');
define('LOGGED_IN_SALT',   '2pbJ^OM->eO-.:elb43>XP/!90q!nd_X_Ti`(=7*wdv,y;8;2FZg>-ajuqkw2uuX');
define('NONCE_SALT',       '~4.py[iwe]jsm?y.&x`:LG^VU~q1Rbdq&Z<0@d0ccEf7~[H[bvlhw<@9 y&[sY}a');

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
