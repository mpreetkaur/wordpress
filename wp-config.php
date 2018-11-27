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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '$Wm$yKF4vG>y}wL]r/h:WJcB9lWCPV?4u<zjz !:hJxp0IOP<VL=u.X_OKQMB/($');
define('SECURE_AUTH_KEY',  'C5&^laedAP#(i17nUM/LN+3w^S&qkuGI{pQ;b/ 91LKS2}7giixx*|y*kWO?l7V+');
define('LOGGED_IN_KEY',    ' :S<&ExfhfsoPMl<r28>R1eg&WQ:7p,$EFvWvW!sMgO[0P_Tf5.9xNh]Pzr*<>b:');
define('NONCE_KEY',        ',xjbp>%<%o.+a2f2p41j7EljCjn~xJP*0Wm4rXsmlO[LF.kMrG/|HC&f)UXSS7il');
define('AUTH_SALT',        '~,U^A6f)yY=pXysJxmOw=fx*Izr!/twXx^@@@:JQ$YKGR,Mm4/m+&5wzpeYe)_j.');
define('SECURE_AUTH_SALT', 'oM%dJc+U%)`cK}HNaz,dv/ 4_aM<tQezb}VgE12(F@uuweLq=X({diR#PNZ|HeLq');
define('LOGGED_IN_SALT',   'rti + }%RJ>j,8CYw_~;VsmHJV,(uV`b3)1MRNiC*}((}:|Zc>_B714iPe]~5&ns');
define('NONCE_SALT',       'O`Fw}PJ^|^KE!^{!P P4:TujCHr!H1Dz^vDgzL}z)cJb,>#r720b/B(H&52[A]!L');

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
