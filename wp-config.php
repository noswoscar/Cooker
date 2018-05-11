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
define('AUTH_KEY',         '5ElU5Sprg*m>4jTA8dJ9egHyfXSqR8m}[0MEh3w*[R8c<G(gUOlUF^k^AVq~BO<S');
define('SECURE_AUTH_KEY',  'W_XYrHx|U,Vc;,m5;;:Dy04=IU[SX~ykW1^?AFDaS;3Gc8yWERJ@jXLR3AW`3y2M');
define('LOGGED_IN_KEY',    '8DN}k,v$:J{Yn~c7&koA/8pt%nCF^G:fvaT4yUrYHlQ2#EtCfM)c&Iu~e1$xpzxk');
define('NONCE_KEY',        'tFP!hB%jqe%XM=ZHA?[9Gt)/~pUG 0c~1XGLeF9(,mCN0Z.PCJcT79C;c<;NxZCy');
define('AUTH_SALT',        'BG[`C7OMQc|D(/pFq:UwE}c9W(z[8ot;9F`W^O:t(c(@s0wG_TPlA<=b<s-dQ)&l');
define('SECURE_AUTH_SALT', ' >ow;={8tn&%!]Z%-ZA6XW=XK#AurP q{uf&}gQE&VX6!q`fP}K0ssCq})Gi<d-w');
define('LOGGED_IN_SALT',   'N2$FSzBK 2rQ~D+~#gah>1=*]:VIO#-dbg~aVB~}3m-rIO5C%`_EC2NNxze1]ao/');
define('NONCE_SALT',       '.d/P,KE:xAx|,vW)>Yc%j3g+V5>WIkAmE3WOR$5N=-ffx8[1l.>b<1}DqXw:n6rd');

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
