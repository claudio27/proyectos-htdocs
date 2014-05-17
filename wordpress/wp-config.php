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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'nube123');

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
define('AUTH_KEY',         'tqYN8xiYBA4^bi#`-{]_w{MP:.0`)Y96om]%A_qMs&#IwZ;KKbfe G98ya)FnkGo');
define('SECURE_AUTH_KEY',  '@/B!T`@lf5`xY@QGuFD$p4`A;S]G1*-RGN+Sr@Y)5!`h;pKSG :_/Y--%^L`R<Tq');
define('LOGGED_IN_KEY',    'a];naZt^vi1&^YJ%P_Qr{V6xUPB 3H:ifKYy;>0%0*`NI$UDji)kLzOWO-ndYDj?');
define('NONCE_KEY',        '7V_:[.ckcB`u?)C`o&^h^#:R5,gS1J#=$,z|q:/fymgj,#tY,=O:H7vGJ,k2YTdn');
define('AUTH_SALT',        'o{vVRlQE~=I<`#HV&Y+&)|HDU)tDiOarM9 @m]?J{X20zmMZ9*cwYUQf`Q.lr9Y/');
define('SECURE_AUTH_SALT', ':v+#QoK(},[!;c?]4M]cx*n[Way*foX4PImSS@|DruU&;!&({D_!V40NSD!9,uf_');
define('LOGGED_IN_SALT',   '!c*[)1AyMMcd$wXp,cBDB}4V.*8<Z]5Z,X=VO_-]P9xYVIy8QP[@Vs|YD;_H4Uug');
define('NONCE_SALT',       '-s<Tk:!AM*]Qo<$0Qw8~oU::p NZBo/|kaWv$EM$yW{P!&x7WpbI-TTQw-3T qv&');

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
define('WPLANG', 'es_CL');

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
