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
define('DB_NAME', 'atw-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '19,5dj%jxD (;Dzor=e46n<:I6XO*|z*/EF@a{,xX&a_,AtTUd{>0N5qR3[ME{ #');
define('SECURE_AUTH_KEY',  'e(VwwK80RY(pF(ZYl*Gz.1}&}F(Y/l{_y1g<gC!XH#}8$ll8SBL$d8M4;/`~Qkh[');
define('LOGGED_IN_KEY',    '$i>EoA&##;4L]mvy!2^AH9&yUUwA6;(!/K<mwxc%NZsObI)DT{&JOc!A*XMpz=|+');
define('NONCE_KEY',        'M-9(^1UKB&`J5L*Z^hhN-KdUzx>tH4m/]usuqG6q6x_E4<${0iI1I:TjHD,QOPS1');
define('AUTH_SALT',        'N^oOAqB)qP5Cx~+i,5P:QXvQO%f<I*eFR0./H{}d.`>/+lBJ1#sbYo-<~(c!5/wm');
define('SECURE_AUTH_SALT', 'q!JNTLwxl]GcciMT;g=/;GG]&`FCM{GR&Wppq7$xG K_DGJqf,,Nn=%;o+K:3Nke');
define('LOGGED_IN_SALT',   '-i?0[AILI>wxU8%.mhHoyIAVLw#s&c?8Q$OgS]G|w-(,-V%B}ZY5XPA*Hfn:j[Aa');
define('NONCE_SALT',       'ZF;6@|B[I#R330$Zj-I>l=i#x&72ERCrugf=5Ga^49$FFmbZ`G26RIR<hVjqNlEk');

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
