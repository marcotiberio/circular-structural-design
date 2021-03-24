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
define( 'DB_NAME', 'circularstructuraldesign_local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1,6#C`v(uakx%$ 2b+4j!]S v?H!0@1=`Ol<du1W (QHG?h1CTxj?9^s-S3ecZ-)' );
define( 'SECURE_AUTH_KEY',  '[O81<n1S<#/x1ygC}Tt;];g=l=lBzb&>tFLw;0cM~h xjoD9=Rs?vs6AgQxV8Yfw' );
define( 'LOGGED_IN_KEY',    'd`m?EX>};d`u`6a81IPO|qxz0viQuBUMAk@w9q`jkhwD3z~aUf-adn-mqfL+/6<n' );
define( 'NONCE_KEY',        'MRngEs qfSS.~^#&eReSfaN_oHk+~#rm[?& Ib) B/qB4wbY8tW 3g9.$T$nn~+0' );
define( 'AUTH_SALT',        '8f`(x$b&.!k =T)aTK{Eq ]}oecVG|I*?aJig0jz0/iZy.FRk~zLQu>wsb[(X2(~' );
define( 'SECURE_AUTH_SALT', 'P~1}p^fLlp:DgYVPXC!DySO,GC+X=`/5vz!qHQ%z:{6;.m{],^$oRxEsyB:)`!!v' );
define( 'LOGGED_IN_SALT',   '1C><e,qY0m9~]N/kq?tSH8M#Q%KjuMWg +bJdj{/Yb&VYSt4n{-a1nlg)@|Z~VSO' );
define( 'NONCE_SALT',       '-V$[efb/U=2iuLr(`*td1dJ}X6e6TaXKQY`+aL79wIG0=-=x95P:eg}4+r [;zBL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
