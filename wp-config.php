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
define('DB_NAME', 'sketcnfw_wp_ubablog');

/** MySQL database username */
define('DB_USER', 'sketcnfw_uba');

/** MySQL database password */
define('DB_PASSWORD', 'Admin123');

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
define('AUTH_KEY',         '?}n)2 (=n-`CZL4W(w)f/^HuX^|AU-0}=N>a9m(Rx[uWQ=@@b*A?gR1^6e#kzFM}');
define('SECURE_AUTH_KEY',  ')STEy@`Zn@ 0IH|LzP+;CBQ5YYN1}D}I.(/C^w*k4yU/?VLh<UJ@8O&~` A-$L1p');
define('LOGGED_IN_KEY',    ').3LNc4=,qk+{L_qqE>wXYcl%Y0J+3D4rr-MQH_MB1IATe2kmVIA3!BIH/DDPJFb');
define('NONCE_KEY',        'Fa*5eRqX`KEqI=e-vkIuQCIdf:=zp~oH)D>B7BXk>mq@V*iBp<w}Hje/j*WuP+n3');
define('AUTH_SALT',        ':v},_q#WKP,m`wT%!qrO2k)>^0XqDi`WVX<f*d<i2R*-{i/j9~%fVLY0 L.zV.,2');
define('SECURE_AUTH_SALT', 'L?XzjF*}hc,</)[L99,dyy-3)N@^LL2]`T1Z=OjUsZR_>e*Y7R8#*M~=!/?zU@]}');
define('LOGGED_IN_SALT',   'WI]!Xm;r{w{Dnf>_1NP52J(! l}(~*r: aJBI]%YQ57XBH+YqF$?FAYsqYG2?@0A');
define('NONCE_SALT',       'dX%;=Z!jFJ?FKWw$hZ*dVfmZe}}kIuus-0w`qRbbsi@qwpn/&l}J)VLBsHGer+g1');

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
