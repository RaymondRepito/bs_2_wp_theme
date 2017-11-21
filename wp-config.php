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
define('DB_NAME', 'bootstrap_to_wordpress_db');

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
define('AUTH_KEY',         'B~,0^<^a8jAs}HHk5o(kyp}@i+[:3&#9X9,+3IpP>i35z(K=iH_KtTHj[5:2nG@:');
define('SECURE_AUTH_KEY',  '<.XEt]k~.B7:A1F:#_kT=-/dq|6L+G`_na<K`V5jh&|t#pP[1CH],7[(Zo TQN#*');
define('LOGGED_IN_KEY',    ';mEU^H>+F3E3SqQ&z=J%@Ut`+eg|g:8yv!bmP0!om;quT{]!6A?lNesKhZqAlj&V');
define('NONCE_KEY',        '86IfX0@KZX1iMNfV.=o#I@P%zXYZo4%(jmn7 vm8kb/(.&WgzQ%L9g-L}]ln*Uli');
define('AUTH_SALT',        'wl N8i>:4(fH,c+{|>3pD)<khjwc4OOl<WqLyv X0{6}6SsHMn%AN+?Gfes-0(e[');
define('SECURE_AUTH_SALT', 'q09rDrdsKu<ZS.nMG[{R.[w-[MhP;ck9I3xEI)0.?u[etgafsR~GaWgJr_ >=1wG');
define('LOGGED_IN_SALT',   '6}+uL@kNiQS#IqibiKt_99^0%AcrJV](;#4rfp<I$ZwAp{wM-iYt,@PVRUfh!E4C');
define('NONCE_SALT',       '!#%wP086Qh2iYr`ZkpD3l0Qzuf<Tl35w+(C|b tu%Z.n#!V5%;Gg4-jB$dl|OQT`');

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
