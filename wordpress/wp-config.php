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
define('AUTH_KEY',         'sOJ]ez3 1O~*,~-4`u?aV7L7xj7,nD}CK_KU|XVQFY|E-kXu.jc?47e6;|Y, BX;');
define('SECURE_AUTH_KEY',  'q^endE,]cmq+^X_=Mu~+#eNV<3x.V lt[/E)Qy|r-u:Uee`pI``FZb++I+t=~@Na');
define('LOGGED_IN_KEY',    '[+;uTXOwre5jxBvc_3Q+XZL5$dN^A/Nt32[@^-V(kkY?|_!%>xz,i-:R|o3)>+%}');
define('NONCE_KEY',        '4m6o^%=#CHlKN33|x|%M,;pyP,0]S,.@V^CT-ZiFt+rq<.eRoRlgv:E%?Cn2VRVP');
define('AUTH_SALT',        'U*]cJ,Bez`(iE}E#@.*wU`?Y6MtW)%#tLQ7f=t6UH-#zT(>*+dMW-4nSidn8ZH|&');
define('SECURE_AUTH_SALT', 'vJKcgc4!OdA:qeYUxCtz#IB:.*`a0{%BFr5|{k,FF_+L(vgFb:beoht=_X&xgOkl');
define('LOGGED_IN_SALT',   '<w8ck~yY^^G6;cXgL(iip{%X]EHF!PmC*<G6Y|o29>{%T}m7)@&MLl!J627:+:6Z');
define('NONCE_SALT',       'fiL{(lBS6zYCuE1mW^}SM;hk@!@E++`/)vIs^6hy|ac6EPDOjpd4bEv+yX;wllWY');

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
