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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'I:,qk2vz?,XNu92l$&XlyZgV:_^Ou,o]YsYHp<)[6z<YHST-=9a=10:TE{h9q0k3');
define('SECURE_AUTH_KEY',  '~*y?s1TS7=/:7DD_V=4FSj?Xf6Tt!e_ F(|>5EMaa4S*Z<UE$8PjOGjke;/yi*5e');
define('LOGGED_IN_KEY',    'X$#O@?244V^z.RvtH^E3fzv*JlH)LGzR2qzK%{C@xC:w.xVpn@%`kgIgv6EN}xs0');
define('NONCE_KEY',        '[Kku2U}.oaYv60_b(}sozXS,Sj(*oGgfDYWRrFYz<QzT~MYkPyJ:,V%40ZMy#3tT');
define('AUTH_SALT',        '&?W=S00<ZM5kGRIxBNwLpRcaQs}IyVNAf7X[=U-AWvs>5;{a#erS)~L 5Tm$E9qg');
define('SECURE_AUTH_SALT', '+QpT9n#zlH+IpxTs$@z5{/3GZ}O $O8>?2a_$YH(UVd*eDRlS:a9AxtbU4N+j<~d');
define('LOGGED_IN_SALT',   '$`h/n}+7i_V4(p^nwKz>x(a|T=T!+l,nP1ig|IE?/#al[Pb$1Yx{,YcB&Hx|>WA2');
define('NONCE_SALT',       'q)IK8tDL1(*fV41{(CiRnFNdfZ5y_@va|0RM~$R*;F#jKy):9H@gQ!H=/rz1!FrU');

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
