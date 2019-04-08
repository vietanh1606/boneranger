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
define( 'DB_NAME', 'boneranger' );

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
define( 'AUTH_KEY',         'iH1D<Zy?mKg_^Xg|BV*/iE,>,{_amt?sUN=2vur.Q%9u-0J%X_Gv<&y*f:R84UJa' );
define( 'SECURE_AUTH_KEY',  '[A} H>mrujw]rv^F|WH)wpsM}85nnZU6vz9cz!GsQ)&1=^a(~?`yrK}8$ow[F7L<' );
define( 'LOGGED_IN_KEY',    '8)>-nKR6!q$-ldq4/8g_n#~>F G?V]gJ4v|^P%a9(f1%Z<MJs]7z@5RKB;qGJ#/O' );
define( 'NONCE_KEY',        'gSZ}fH=i 9}1f&~2:5Ka@C:fO[:i,YtQ72|y9gd|mN[hJ*6?wsF%NR:0TB5~0k%N' );
define( 'AUTH_SALT',        'dL$sD7h|#C<gJg&+m0M7wb7p60#ZT+2urY 94+,Z.k_i5`p9Bu!TrW`<{{HfiBo0' );
define( 'SECURE_AUTH_SALT', 'z>.MpRstce|jNDub0_#!]+#1bQJ97E7X8gc(qwR36?I.@nma5CiPO{7cXN<qy@oN' );
define( 'LOGGED_IN_SALT',   'q19^<l&j0kF9^7@aOwZN)gi|*cI<?Ih0<tfH4Luu?hx8MnNQu}Rva$7sI#Vs?Ms#' );
define( 'NONCE_SALT',       '2=GxBJcRSS|_ss0vzM42ELS5k:wj_dn4^*|+6CFud#^^@$@7[2@Y3[C~cv=ThzO-' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
