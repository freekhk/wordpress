<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webper');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'freekhk.ipdisk.co.kr');

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
define('AUTH_KEY',         'Bq`(h.yg_--Sk%b)W.LnKqz.;fq#`C`Z44s$eF{!<TZ~>Y=#E*rk=@~v |!V({v;');
define('SECURE_AUTH_KEY',  ':R$.V-9mhmhk.oj65J8g;2LRul3E/GuDwA;[LuttPuo]d3kz|_=[TNlp*mc>Ank0');
define('LOGGED_IN_KEY',    'K/(ho:&g&`z]|*P/|{e]/iyBSk~_yZ#=+}99a {d>|h5a{SOSYXXp[9*RnY0 ;1-');
define('NONCE_KEY',        'Bt*|]?XVB4`x?E|ZFkAEoT44Lw8C]2,J8AJSg<maLj,T][bLm:#rY-[egf[mB*zE');
define('AUTH_SALT',        'JPD{sL0K]e-KMt7y,x%CQ}Eg8k+EmumlCqY)H+t.?6<GwC:M:ln7~,`uwSH+wpq$');
define('SECURE_AUTH_SALT', 'CW}5SsR`ZZ5uXZX+-]OtfYTG.yR$K-xQ_,J)4:LMflFvz8&K!jc0FN +|!}V3N/y');
define('LOGGED_IN_SALT',   '+BVqSX0OJ$2{@fE[<hkX&U-`I|=v]4zAtg*&U>G-K+W u.M|yMExz+!+8jP|KzuO');
define('NONCE_SALT',       'L{6gC>(<#&-#|K&E+wHM `@*6>.9.,E4-AY4hfihEY5ZMddyVkbn~emRDDq4gL/H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
