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
define('DB_NAME', 'myTestSite001Db');

/** MySQL database username */
define('DB_USER', 'myTestSite001Admin');

/** MySQL database password */
define('DB_PASSWORD', 'Abc123!');

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
define('AUTH_KEY',         'WWT]4jN T`.X*j8$u|w!E-lkzxp0)sd/f``Nha@{aL)`3.l[,OCQo!9#ut@i]sM(');
define('SECURE_AUTH_KEY',  '==?P6CO=dg11R`$[eQwoJuiv/xqE9M%4GHk1<_p|t9QQohz_giF-,>t*6mODGX!O');
define('LOGGED_IN_KEY',    'KBn14Lkk/A0<3*:Ff7T$cj4zyr;vmMA+5/lE0z4np6,xVm2/@GdC&bab9IX>m-j`');
define('NONCE_KEY',        'R`n?L|INwa/z6,/q~mP4lsH7eDn;5%r?j~0gLBd)8$#L|sRzZF6ISL]aSEm/cksr');
define('AUTH_SALT',        ':vWk_+ Ah`y,j;zG|LUzx6-P.7+xr%qX~ ?_tz I>NK(W}}Du2}?5X%`h,c;2nuv');
define('SECURE_AUTH_SALT', 'rQQAh_~@|0 Bc>%_JiXFEUOWKhk+#/TJihqwenEjz=*)[G-6^,AHG+t/gOYAJx#L');
define('LOGGED_IN_SALT',   'h3`%+RWD*0uCov9i!2tfD#(pV$s(J708 r|xKS)M0l@cq{n}!g}?^4Mu~xOqWc0|');
define('NONCE_SALT',       'OQC:W/B?:H.[;GXSp2[tyuN1nRQW+x`qW3Fy::U;H+Qr@4qA(CA/u3f+AwVbDwU/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_myTestSite001';

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
