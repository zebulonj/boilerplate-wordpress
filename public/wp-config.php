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


if ( file_exists( dirname( __FILE__ ) . '/wp-config-env.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-env.php' );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C1G$zld<IAK17*!*&$=+L!>LKX2=#aMQ~seo!q0*|%TYu@#P|+*MlG9|(8cZ&a.)');
define('SECURE_AUTH_KEY',  '.+3|oWg~1,X|}QNcE8d&4uRgt<,idaF[pU{S2Jsyx]DN%oZ3L-p5RA.>fV0zNx>C');
define('LOGGED_IN_KEY',    'Koo2]ap+et8_Z&gMh_ ?&;+t7Py4wh)m)dcP/OAGt*uH a^K/a#Zf%%XGcI[%7&G');
define('NONCE_KEY',        '0v,|-rZWAhR|H/zOOYiv%m_VREH.D;n[i^uB=M*!1 S}EST;^0#Yh/gL2jR#3N!t');
define('AUTH_SALT',        '<m)U0k`&n=}IDJ#z07+w_A>uh:GpY1y=X7)0;-iD30tTD:xiyg0AovF%f*H7Yi4}');
define('SECURE_AUTH_SALT', 'XLRpV+TM$X]<ozxwq@ex#kXU.-|hZ>V`29:<g_}iQ+h>-(wE?xNSB9ccn5vhy+3l');
define('LOGGED_IN_SALT',   '8#B<4}3cGM2X@!N.SrQb-3osuyB8 dqn=J!Hv0$[n1{zVM<&=ISfT^NrC(FE3[Z8');
define('NONCE_SALT',       '8l,+$ylOPv9EK|H^P0*NFAP4TU7!k*:@>T0G.8J~*Cg{(HRxvw,!XG7D]Hu;k7ve');

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
	
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define('WP_CONTENT_URL', WP_HOME . '/app' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
