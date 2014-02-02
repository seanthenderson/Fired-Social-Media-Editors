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
define('DB_NAME', 'fired_soc_med');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@K013NRs-d}pw7 Bb-VO.xUnGK]l-|[MTN$<e8dCZt+}QI4UP!aVc3>TGGS1VF3 ');
define('SECURE_AUTH_KEY',  '[|4f]WV+Xfn`|&^R vtAP|tPT@M~TJ6;1T -Z_%!GS]Qc#TKpOdp$bR,]K%(D@xE');
define('LOGGED_IN_KEY',    'maI>7o}fpT-oQB%EW>(P]`07u/5pIPC.Fi6mmC>-%OD!+L!OE*>:)e5C4+laZ?qc');
define('NONCE_KEY',        'zT]@*tp:O&x:1I8v&!Zz>$t*y33`YC0WG P.`heuv1D`Fek<X%HlAh-,eNenu~!z');
define('AUTH_SALT',        'z+*S&%5@Fk07oyqV&4mLJO|AS3BuJsc|wdgtt[m7`4`[8J!WRJ,-mEH:Ms5?G>v[');
define('SECURE_AUTH_SALT', 'A($d^8E|J+a%MFncatJ%8-O`}t+4e/%3xzNJuPmKcli72mSRiryhQ^^@[?)7+H`c');
define('LOGGED_IN_SALT',   'NeIH:fufokf_b+{Y+RC$DB7mRM)5uH.k{D1TW<a|unkhbL8)wgb^Vk_O&UKRN@gc');
define('NONCE_SALT',       'A)p[.*p9Jpk7cM!ls52ipU8-8)p9q,o?b4krlffP^-R@5QPwhFbaxJ2fV,L:/!]<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
