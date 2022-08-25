<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_plataforma_interactiva' );

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
define( 'AUTH_KEY',         '/[EVz|s6fkToPZi8> 1ha2UVU4mL|c):HCW[ g,^d:SFRjxGFuo^]7&Ut)4[(0`l' );
define( 'SECURE_AUTH_KEY',  ']ZT=ETjmUX]8C]UUlBX[_ihcc`jc`P$MMD`Q(FMQJzzQWv_Zt%G5+G/b}@JNfDNM' );
define( 'LOGGED_IN_KEY',    '5|?j)&lvXSC%(2B`/F!N$/Csi.)bl8;MR<wgWJ4[j!qiupEKG6Na#Vn*W>q%t1:o' );
define( 'NONCE_KEY',        'iC,xT<&)6M$ns;yTGU3XpaY=8|#6qHgxf3x^:jHEb 6@jQK&^I.t-W6SIK{Oo/3P' );
define( 'AUTH_SALT',        '}b|u9/H/p(~[CS5e!}XE{5g0mz9iV0qJ4Fdmu`#lTFx4*uv0e`{X6@tRCJ6besp;' );
define( 'SECURE_AUTH_SALT', 'uak:+&@=6#R&T.SZdf#We|YriE!14CP>f]50KtPPYG=pxqNZbK,*]?<=-8la`RcE' );
define( 'LOGGED_IN_SALT',   '{IGk9m@8~2^r-t]ss7g!m;Uk^N:wEaH;]Gs)?r]TV`($ZA]zduwY(F#JEI9@R /M' );
define( 'NONCE_SALT',       '*N!$=UAJwH^4%&WfDRg.O725y.,MF1VZ69kK^M%2),XGJ/5SG;8vm-p^5&+{i~Q=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bi_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
