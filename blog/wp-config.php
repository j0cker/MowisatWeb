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
define('DB_NAME', 'mowisatwebblog');

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
define('AUTH_KEY',         'O6x!wPJj52ony,?,!M1Y?Lx0:/rV*eK;Zotw/:GV]xCfa4=xuZig+wM4O.5y^w3e');
define('SECURE_AUTH_KEY',  ':B!q@DER_6$gS}nAL~h0`uzi0A=yv*CIp,%V4<kD].XQ6F:/MW?u0_/0CX~d}c[R');
define('LOGGED_IN_KEY',    '(zW,gk+lI#8e=9gKR(&M~]yNrOcbAmxzbB-| cY#CR$<tJDSe,.hd mOYdLtSuY_');
define('NONCE_KEY',        'GMNE4y#)YMY65FiZm|OQFgWDQ36~l*llo h4Liu-wQ;)7zBZLkkd3`erKgk:K5+B');
define('AUTH_SALT',        ';W07K*`yn%pYwx5W!0]P>b/(jxBUk[,s+>/E|AD=zHO4:SIdw{Er#e~p6LWw@J3K');
define('SECURE_AUTH_SALT', 'n^viG^l4+Pjg.OB{k!G3>?>V(NJ1O$@NmE9)y7#QO#XK#h`{eC5D;dB$fGoa!.%E');
define('LOGGED_IN_SALT',   '|YiR<Q}4uV8z65b-U!bXlBs<WPo1Qz3.kL6t#X$-aVv337q9c3NzuMxC]9=Fe+x ');
define('NONCE_SALT',       'my`(<*B`u_;E1zy`+R[OsGHhI,T,X=ZGlx)W2)x]HzitU<g4b/&J%baH-cj`}|I$');

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
