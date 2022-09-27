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
define( 'DB_NAME', 'd77tg8hv8ju6qp' );

/** Database username */
define( 'DB_USER', 'pmkvhvzjrqtzne' );

/** Database password */
define( 'DB_PASSWORD', '033c2a64c8d4d61e92a8dcdd03d18fe1c05e48f752b760b54c9255d29debbe95' );

/** Database hostname */
define( 'DB_HOST', 'ec2-107-22-238-112.compute-1.amazonaws.com:5432' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '(FK[VZq<8&R`W4c-F*M@Mp%s9Q8vWtB8=Ui+0m${wD(NJ21CA|!cC=t[JREMp_S*' );
define( 'SECURE_AUTH_KEY',  '`;;z`ZF>_;9X(I&geL#!Idf]Bfnh=P{J|NOI`YCXG-BC0/S<+>oDDmXT*NM,$q*d' );
define( 'LOGGED_IN_KEY',    'pNIMtCN^(z]wMXT:73q_kYq@dA{/,f6>NvDuaG}mb>/uBD}18Zo`v7uUt2|!}KOJ' );
define( 'NONCE_KEY',        'GFeV7T-(hM?W#yu<o#J*uc6Q%<1+<#>2gqY=?`XYDBSA4[z@3v&7#0pHvQxPQ%.)' );
define( 'AUTH_SALT',        '`wFwJeL!I##B}]hf>!!HRY]EOUnwXk3u:p..Y?p&<4,`ZU2DJRkn?>:-D9#15WsN' );
define( 'SECURE_AUTH_SALT', '0iQ0dnM}y+}^U0Ll(#]>c%Q;_Zn+gXb+tA#^v,d#:iKmiNoBH3re&,P_K8!mUqr.' );
define( 'LOGGED_IN_SALT',   ':Lq3LFa9UIJb:1XbSn/6Z|K=eA!UjKx1l[pC=[4pj?rTNICLRCgheRi5hB*$1GVd' );
define( 'NONCE_SALT',       'pmTURYO+)S^V!MdJdCkq;VB.RJyD,={(SPY1U)G+A9ZTPi@V[SK1)]C!&.hFsE#q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
