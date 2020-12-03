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
define( 'DB_NAME', 'wp_ftfood' );

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
define( 'AUTH_KEY',         ',SA[:hFwEn S$9)h#cVyGZ(|:~>2dB;*[nbQoVtaX2u+=3A|lI>1>SBW+W8eF9Dv' );
define( 'SECURE_AUTH_KEY',  '<K@ES--=Wf@0_k9*0-eo;,))d<A;WBLSgOHOuzOzP%AgSMc8P)fnbz1UvCcd1f~R' );
define( 'LOGGED_IN_KEY',    'AWjJqVzGt*=H_ Q!de[7yyx9_4F%X7dnu].MtIoWGJw7v!aLQ2qMfp/ZfPPtI[u/' );
define( 'NONCE_KEY',        'gt)Gi6S5d&Yy;^GWL{wp,xp(yq?}U07iWG#.][tK_~y@:nGgzeOEiuujP/ajiITl' );
define( 'AUTH_SALT',        '(G!I%bq(:hfD^tX!^)xG7D}e@2sl,P%XS^N^;Bgm9Bh7Z b79XLcc6y|!Ri`,_~~' );
define( 'SECURE_AUTH_SALT', '-s7m!c59-*^V=p8Qu/pnpSah{,(,B<NFQGq-.TyY^8PP!<O+`6.lS G<Gzgz9p/f' );
define( 'LOGGED_IN_SALT',   ']nAUTay}[Dt5$Lmc(QPK.-7X$[Tci0S468TxF GQy*xF]9WT_jOoE.`AG3s|sAo<' );
define( 'NONCE_SALT',       '}y/t?&&na<5Q7=9uS2{CnBuDLSGYQBTY];[z,Ig-xBy -mIFBc7P0=>`^$+c;y)C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ftfood_';

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
