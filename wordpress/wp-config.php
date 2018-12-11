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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         ',ZDUc(XbdnPbYWv_X*ic2apgd*&M7ZY%eRS{0aSIP^e,=x$QaY%ed0OvA-_e7A0g');
define('SECURE_AUTH_KEY',  '&O$z[yQL119RXJ.v3im,VbT80_(nhBwSrM)Z(MX5_0&]&;mC)idI^t,QcNa;oWk[');
define('LOGGED_IN_KEY',    'R,B7MnW_OzDHVR[SAp@2k[F=wd_;sc_,99W_bmzYGkX8lC&ZX k}`7,C@gT?c>tT');
define('NONCE_KEY',        'a{[|9I&:b!q#>mM2:vM?IFtz|!x/QVSZ%q3m0krCV1xhqx]20OzKe/zoH8&n:Xn%');
define('AUTH_SALT',        '=<x${bu}EuL2/6qj~.Hm8sv~qu7rlF[bFq<Q+qH)}4v,^jy2 MeiuCH|):9sW&:O');
define('SECURE_AUTH_SALT', 'P<YG$;S:8nqPIN$Mf[qY[c) FUDdQ?-w2n]PG.l8ZnFI1WyP7]ia,|]-M,~}x(TP');
define('LOGGED_IN_SALT',   'FS,h%u !9R%T~m(@2fuwz%4k2No0D,}t7kVP?A.{V^<b`/Ntw*4- &Pru0cC9L?(');
define('NONCE_SALT',       '48G<KIdmlSV0SyJ$W&s)o+86b)<t7R-!j;&Y*LY2+w+jRM].#oi47?INRxII6F..');

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
