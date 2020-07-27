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
define( 'DB_NAME', 'cfp_getech' );

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
define( 'AUTH_KEY',         'b[/$_O4W7H:jfRH_=>^$><.3!-r WNLcy`Qd@]5(FV6^?/I*^z^_8#4N0Jg5rWmU' );
define( 'SECURE_AUTH_KEY',  'I12#RC.6]-+K6<fI*zE}VVsy:{N5Co(g2U1V][MraxpXn>y1iG=X}SSY%cuLi9;w' );
define( 'LOGGED_IN_KEY',    'f>VQ5u[C~(4x5C(a{ap[^#J2?!DU7!4}WvQCP}4.KPlpFw1#IB|!5?KIe!dvC/8-' );
define( 'NONCE_KEY',        'L>L==`?qS:prAAJ)]y5X$kD<;VTjOy/2OSAmg5E!yBC)#ntDHS!W,M -|i%D3V%m' );
define( 'AUTH_SALT',        '$_JxZzl:M CW!0Zo.)_Vdan$^d;nB E>[Sk>4pdV!-;6<-(Rok)JKn4b6Osg%q*K' );
define( 'SECURE_AUTH_SALT', 'oh(ip^U4n<DtAYWck+}6hnv~`WqYr!saqCF2:704Ym4wN-G~o*$GK/$ZV-,j>*F_' );
define( 'LOGGED_IN_SALT',   'jiaM[?.Kc+5q]!y geE9(]@kTp0w_WRq)Q3Ut:(+X=(ZT>&P3U|iGP^tS|B/T>]P' );
define( 'NONCE_SALT',       ' !9j|WU`E8hGUpDSn@m6ehSgi_)<U<C0$:*<^gu%w@9|{Yu$[JdHl4{fmr;@]xgg' );

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
