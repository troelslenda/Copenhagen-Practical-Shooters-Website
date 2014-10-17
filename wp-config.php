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
define('DB_NAME', 'cps-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'f<Vh+cXip)n2wLNQS^|z`]W#r5N3$z)d&GQ&2rDbiy]XLx|Vjk]7-PIyKYK2-}[R');
define('SECURE_AUTH_KEY',  '6}~EYf9oo1x,/d6q-|q7aca(yLw|_kbbm.2fH-dt z=6->gT|b -p7d|NYi(irly');
define('LOGGED_IN_KEY',    '/N{zMw1L|G 5AG(umh^EvT30XZ8Z=a%fG>sPq[|cI--#YK*it|Kd|=X};lH!jsCO');
define('NONCE_KEY',        'xDpA%~@.|L36qM;4N/}7VH$50sCk~rE@bA>rsN&e|iLU|-mFr3eY}r:G.FBzgId]');
define('AUTH_SALT',        ';m,Y<<j+{qqhQMQcYo }Wh)]YZ=pTH|x{k S?5=*Fe0rN8j`V>*;{EwnJ!X0egbF');
define('SECURE_AUTH_SALT', 'OEwcGe&Z7Q4X|St$r-fL9T]88|@M]- KFOy_eQ#E[Lo`zwd7G,ymbu9[?a|j6/a4');
define('LOGGED_IN_SALT',   'k}x|gN[$6BI|cH3*B7/nKVr^GjWP|:?sFF+un<GDh-#l?<!un+ |9-Y[BkmuE3Yj');
define('NONCE_SALT',       'q95n1P=Iwzu|D`1#yvK+dX/vV#A=v3E19|O=~[SX*9p=jLwm)xn+P*/@!)6lNu P');

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
