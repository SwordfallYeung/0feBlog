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
define('DB_NAME', '0fe_18561968_wordpress');

/** MySQL database username */
define('DB_USER', '0fe_18561968');

/** MySQL database password */
define('DB_PASSWORD', 'yang5128235');

/** MySQL hostname */
define('DB_HOST', 'sql105.0fees.us');

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
define('AUTH_KEY',         'zm1w@,*gK1s3z5)m,Bxpn_WQ{UB:+S#6&{/%D)89N|LSWt<3zEa6ld]Jj5rY_)x`');
define('SECURE_AUTH_KEY',  ']-[o5dyA$|^v0]qPT4&P2dQ&Jrc~I7o^%O<~%AYY7QZ]&`LD:.B[<UKfMk1#./WN');
define('LOGGED_IN_KEY',    '-^k_XF<@e$CqzR9/R^AwXpb]QE{{ ^nJl(hD1^PlIi2?ku1{5.(JPikbsu{[u4da');
define('NONCE_KEY',        ' 5S.mv9C^Ibz<DBmln)24rZgeaKiN:)|U{i0CZmD) &>H}eqxO^M5X#Y5-(:UB+q');
define('AUTH_SALT',        ';F6a@!A,1yy@<yQEwZS>_)KzIqXAX+myz;m<j(RG_`_>L/HKZ%OyojF so>J/Y~0');
define('SECURE_AUTH_SALT', '1OQO^BibITiN2!l:.)Goj}2)W,ck*5>A0G,iF%Z-87z}d_CpFJ~D6i:5)73a72Kp');
define('LOGGED_IN_SALT',   ')$jS|mRninf?b FkFlm.M4Q}fkOJoDH$}Oa.D4n@/>=Rp=V)_bZm.E%er/.e^6=s');
define('NONCE_SALT',       'vS(d%(,#&O`,Z8?r[/$L B,x x`FQ%B*3Mf6[R(g>}eG#g9@2|!k&e,[2xa6UCm]');

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
