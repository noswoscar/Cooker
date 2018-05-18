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
define('DB_NAME', 'cookerdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'HLlAsMbrSe2PP?Gz:kp&$0}4Q,0sA_h:UBa.[_TK(bg7!:9{`=!?$yd}_rN&t^s,');
define('SECURE_AUTH_KEY',  'le{3vzpjsxJijaPNm;w6Pm+Pc<+;OQj51>gJNde)XiA,z4[_tr5dS 9JBunr/Uiy');
define('LOGGED_IN_KEY',    ';shDIqJ+k~suh$_l1t[Uh@d^=)%C=(k0{y96D}}C&Xv$0>]EA9fy|0`YB[^iCTvr');
define('NONCE_KEY',        '#bep!!Y/E)`t$}_>*`Vv#Hyr-@pw.bd0CZ~=-?W:}u^Yv]Efl^%x55@@BShu;1gA');
define('AUTH_SALT',        '@*D7XO6*_p&/6Uc7Db@}qoIiyi#mD=hLKm?5=!q;DJH&rsk)-XCU3p[VPXqvuc)F');
define('SECURE_AUTH_SALT', 'X=M}z!K&m0z]Z`9cDH7gt]m=ytUPp8tR a@ajy=9X6J*!Kw7mh`,@<Fg%2wbLu[j');
define('LOGGED_IN_SALT',   'qQsd:q+Tt}o,dGBeLz5E(*=N/sKO,H11H(})e7g6y7W<FxDh(Q%CJ_w.bir&e,%&');
define('NONCE_SALT',       '(7&g}S.tb~U=P=Pq}y,PVJ,&)UJ6lV`|vAhR7yvqCgUJ2u.=J_S:zPAi@sl8hP%X');

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
