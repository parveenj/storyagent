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
define('DB_NAME', 'storyagent');

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
define('AUTH_KEY',         'i7#cA_z!.=zh{Aw%DX1vdA)aE^,#zY}LACD;7cH`TwQ(+4c:!/jx_V5.CM|K_vb`');
define('SECURE_AUTH_KEY',  '/kC)dpQ:+{sQPjZYRwW30^uRJ%6vTbg5=@9Ve,%*`yWV9V<LI{G:~,*ukMG #>gR');
define('LOGGED_IN_KEY',    'aIQi#m8pYvqXDU{A_k+U- J1rPsjG)>cjy 4lBRMod?&tsH;&>504=PeAQ%CHt=a');
define('NONCE_KEY',        'rv8-MpM@_SICN5z^I,,>2I[E<@]/lQ}:KtN]akH6DtF]43l$_uwmO,ER(^fmA~hD');
define('AUTH_SALT',        'Db:4)F^!7xL4g.ck-M4pZEY787:)pOCV:l-ts|.3dY^p4YU=t5Y2UGloTa$^i3qq');
define('SECURE_AUTH_SALT', 'Ccjus<3q27O3PL?Rj~gzH(K|7N1}#`=-5d<fK1/IkGE3rGk$:B^,{As}yJN^6rgD');
define('LOGGED_IN_SALT',   ']]zN[|WPIG;ol[($l[>o8n8IUsT{n0V@uM7U,Qii-=nyzgkzAVpGhX+=mhOY !i`');
define('NONCE_SALT',       '|ZG<BcQwX)*^63$ssVYp]jHyfB-i5OlnDwFuIoIl$1v!&MIBH&.s F<&)8G(}9HA');

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
