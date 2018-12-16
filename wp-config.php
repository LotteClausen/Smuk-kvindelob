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
define('DB_NAME', 'smukkvindelob');

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
define('AUTH_KEY',         '3u+1nHJi:T[JK.C#{gc[+|$f^&Drn$RHMR/Vt_e$6]GJ~%XG+EIjg&/x3]PBW[w ');
define('SECURE_AUTH_KEY',  '~BV_4E lxba<;}un.9}-%@-0WHDqty|#&.5I@YnFpHiADZd0zq#K$dYcdx!4p&0c');
define('LOGGED_IN_KEY',    '!(Ep<)|5=_)y>,o]_XySKd+lNmOlEN|b^}wf=00X&tNx05h9%d6K<)Yzm#V{Jq4#');
define('NONCE_KEY',        'zM.$?f-S_BQ,cYGZ!L/(<fxFadnBN5R=7$llb]SF-lk0=LChuk_}e]#5QHSB258=');
define('AUTH_SALT',        'nU1a&$>kt)kyRa&Elo)NQl*?CGxG.#tWr@*-W5>?:cU:+v/>o%?Z8~6{f3=$5-~P');
define('SECURE_AUTH_SALT', 's H+QbeQqVCKV<m[:pm+mEiCs#7n!E[.GspJF>yCbP{tg%egTu9K8`lwbl**8iK(');
define('LOGGED_IN_SALT',   'vdc0CGFf6(RHyqyoU[XC4R{gOh+@&MOhknu!xN%kx(cL~Z$*4JIA8 CoPoO6(S?$');
define('NONCE_SALT',       'y!c#})5nPhfs:W=XwNB472`P~+cal+6_d6v?B,j[FRHek`<AAPo=O!Tj/X#grijL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ks_';

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
