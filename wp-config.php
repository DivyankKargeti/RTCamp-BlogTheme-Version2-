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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hcHbjGkD7+^`XLdDo>:LPW;.68/Da$T~VE=Q*]WC&sATr8c`)~Ye $Nd>Ln;6,Xs' );
define( 'SECURE_AUTH_KEY',  ')ANyH8(f=1mmLA}Fx+4;~l.Ta/My6<{CbfrSE+of(N``>+Z}~+a_/wJn2syiB[~R' );
define( 'LOGGED_IN_KEY',    'RfR=R/A|LYy_3$.QHSsq<aw9<&cxE4@i2^8e vEH9f{xBdsvXe1izwJoNV{>rpKo' );
define( 'NONCE_KEY',        'BSgHVsW$~HO*Y{t$S*@xy=qN41LS*Ct_0oW%-9Kr[EAv:GfRr;IwD-RWt5C7(+`G' );
define( 'AUTH_SALT',        'tuhlhz$KJc4w_kC2H|{{}]ww-AI<G;]+~_VTN[-Q<8i{D?%Zcged>= ^XPK&+9M;' );
define( 'SECURE_AUTH_SALT', '9oS1s`G|uX#?FWRJI6`*:9x,Qol`;f@OEl%@*OPGgFofD`cDH%N(5$;Z-+:g]lzF' );
define( 'LOGGED_IN_SALT',   'Q(o7|?&(,)<br(|_yWn#wgXv8=K^AoemG[VB =W1uZ8KO~p*k1w?aU^ni}7o(uBc' );
define( 'NONCE_SALT',       'I]K@vdCdEI@h[4b&2j-RE}@x)5K@Q~)E@`iVYSKLNX`#n?kCD*G#53@u!||6=BGd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
