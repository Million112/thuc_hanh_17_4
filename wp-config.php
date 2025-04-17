<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trieuquanghung' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Jj2CEiJ_ji_+:p>:ORPh!swRWXpD*wx?V8E0lF}ST6s9|Bj-I~.([}KHD^u}{=~.' );
define( 'SECURE_AUTH_KEY',  'L]bG*-J*?}Q&v|_sDYR3K_S9f_6-xK`}9i:/+9SUs#{n#v0EhLn*=}SLvF:;3^zJ' );
define( 'LOGGED_IN_KEY',    '<jKQt1f3Z<wpkT){r6`#U|_U%|f&mT1.Ysu *[/aN,G[zRWZV^y<}b/sOe|BH6MI' );
define( 'NONCE_KEY',        'H~:[KvVXl9K&WxWvh<u*X,+|<f1;N6Het4,=s:hN3Uyi`Og(A]$mZg?%}qM26D2c' );
define( 'AUTH_SALT',        ';&o,QIns@BMw]+e`DLG3Jw4cF~=g_m<!m~I<o1E4z,J/V?t|WJ[()k%~tW Yi13=' );
define( 'SECURE_AUTH_SALT', 'Wj .3]qO=rFFV>j^WKFJpZnsgG+v&H7 5hod04L_g]0`=P`ETh8/3L?Jlg![SihP' );
define( 'LOGGED_IN_SALT',   'O%>MCBJ /@3A^K>gE3N^S:~usD@=Pq}dryn{bKDx$g8JQZWxh5T&>D3s<*SRwp0|' );
define( 'NONCE_SALT',       'mDO0ssQoZeFKY8Qd<iy65#wUs)hv.g!aEF](=&GqK.h08|zgL{*OC2$];R.2y7~-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/trieuquanghung/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
