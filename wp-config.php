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
define( 'DB_NAME', 'emilygro_animaya' );

/** Database username */
define( 'DB_USER', 'emilygro_management' );

/** Database password */
define( 'DB_PASSWORD', 'Oo1uS6gtSSgg' );

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
define( 'AUTH_KEY',         '`e ?NZ*m%nexjj~Q#<_A[m$HJ(wLl(5o!eNScT*]Sw>k`&9NpE@(j}M>i/`fo}79' );
define( 'SECURE_AUTH_KEY',  '@/Fx3=nrsfmqV}40#<e3Hz)fsPe5knw]`py*WL{:y~3Nc{a)}I7-;bE{bc g=>k5' );
define( 'LOGGED_IN_KEY',    'TBA`6KF$6tTRz^`O!-+O0b(rm/IX~JP.3IAgbA1+HX)p,!e?aIn2/|xPoIqc4_OH' );
define( 'NONCE_KEY',        'v7x$Z[/e5lhq_Q9.PI0(`)yehQ(;848gWSf693PLVS1|^ly`b1QpY3fDwe.b+2Y^' );
define( 'AUTH_SALT',        'BNj S|O0h}^ #!K{Wqg-G)qTMI`&I1&q_oB~,qA>Z.9uB>37+eBnDj~-?VT5T;[N' );
define( 'SECURE_AUTH_SALT', 'eE^Sd[]B)3jGk9p~77)qeY;N1$8=C9lwqxBEL%?|g?*2IAy~2whUC{)7HOaF5|^>' );
define( 'LOGGED_IN_SALT',   '~Uzc(`(|r:&cgb9eorz+t-G7JypViXO*_dO:!J~`lpi:/A*s~Fg3<&ZjF1fUuU^V' );
define( 'NONCE_SALT',       'A^gnzLh_#_scJiMyO27<B>Y>4^+[pzae>_7=pq?1e-w$mP$W&AUn}8<;-Xg|VGAe' );

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
