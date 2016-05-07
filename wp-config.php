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
define('DB_NAME', 'blog_bomorgan_io');

/** MySQL database username */
define('DB_USER', 'blogbomorganio');

/** MySQL database password */
define('DB_PASSWORD', 'Xq^5gHjr');

/** MySQL hostname */
define('DB_HOST', 'mysql.blog.bomorgan.io');

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
define('AUTH_KEY',         'D2aS"GS"~b@Ap;M6twnLJ*H4)G99%nTIXYE"@PsghIg0D@A%eHlQu$E+NPS07osy');
define('SECURE_AUTH_KEY',  'O4eQZijyw9!F@Xnpl%qHIWXHw7B#:sAAlCTZ@WMSVt@~q3j:Hi3CRiwG(MC//ieJ');
define('LOGGED_IN_KEY',    '/tt$GUJa8P+7wk+#gV7+S@1krtq(_b0;")Q%w+cbYj7Uk6Ftt+53Ui02/TfwQL^:');
define('NONCE_KEY',        '1xlz~R4;L&I2tJXK&sjLcMCbq?xCK2Iw%sU4EoGNjqr~N!;FIoDpr^imrAubD9GL');
define('AUTH_SALT',        '`GplAenhQogcuxOigoL4|R_t_|IRBid&0~R9g/!/M4@4zO"_3InJR"u87|Rxno@"');
define('SECURE_AUTH_SALT', 'vB"rA6U!2a:jkMQor*jsm6FrRNbDuxA~Pbk^DidB#Zf9rkECy@fxbh%DrRBXJz!&');
define('LOGGED_IN_SALT',   'Xm~GFD`nsLeHW%Jiukr6RBEz|Py7SK)UjxcJaIz$RjV3jqr6`(huhWrF#ll!e6?a');
define('NONCE_SALT',       ':fQS9IwkPf_gadFYNTf$3&3szU_y):)qRIzvoBiD!QMJ&&GT3|wFz~f0#2%dN!zA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_iiwnd3_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

