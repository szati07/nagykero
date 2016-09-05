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
define('DB_NAME', 'nagykero');

/** MySQL database username */
define('DB_USER', 'nagykero');

/** MySQL database password */
define('DB_PASSWORD', 'T2ZY6KTEq6uyzyNW');

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
define('AUTH_KEY',         '6dfhNlBqif$Y!hrlsV<z+m:<ei8|~20`,SP9Zf_!{phe2PFOh[Q_MSBr9[QvyjJs');
define('SECURE_AUTH_KEY',  'SaqYsTpoA,}~.SJiu*nFBxm[z],o/U0CY*$|@vuFku&ov!ViZd62=Md_JA<$OVz6');
define('LOGGED_IN_KEY',    '=&>og^zBnK*ww:^F@jcY2K@F*D$}J8;(fP-?Cmh?/Z~V+gstE}qb*v$jM*, MW;M');
define('NONCE_KEY',        '!$^[<ey-Oh#7y_ivP_6k$Jf([iIrTfqStcS @D0Y&g(c}<=|N)as[IAPCVUmP73$');
define('AUTH_SALT',        'It/{kDZkU;h@oyOpxLH>-VQ}FDLJ~+7=a5-%CM>5[Z@PYZ6<Dt((nYf-cYv[M[z:');
define('SECURE_AUTH_SALT', '5*z2%hj2^% rz^rT`bhf[-%=| z{RI3ka#<eBW<5wI7rAz$VJ/gh(_.z!UX,7hZd');
define('LOGGED_IN_SALT',   'VSwmj8I6wfikR%IL e~sbt#EH#o+dq5[@5yS~0}}|XFmjZ^b;w;7N5Xda_gg%zI_');
define('NONCE_SALT',       'snDoxM@QUr}:/yST).6(bbY7)g9Q&Zn7Aq|oOP^#.vy!K(lAZ?:0v[=^P$FIJ0BY');

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

define('FS_METHOD', 'direct');
