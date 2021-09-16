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
define( 'DB_NAME', 'wordpressTest' );

/** MySQL database username */
define( 'DB_USER', 'wpUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'oa?oAiZiR`u`p}Aqm7+ 5cgYiFXAF-E9h{E1+Dqz 5h-egOs N!Z2(N`J^06kpud' );
define( 'SECURE_AUTH_KEY',  'm3i[8FvDaoO7(o;!-js~%g^1_^!cZ5JVxJ@!;P<lDYY(Ls;}@btQ#,;MS|bv,w)4' );
define( 'LOGGED_IN_KEY',    '+6>(|JGk353~0sRs0n_7x4Ue{/PE~Z_2 cArj71msuwl$]NRzbJINNeGx`b&H&+o' );
define( 'NONCE_KEY',        '30luNCf ( I(:X{Yw`5~A0`!<I`) `3NeWzJaz41w,!vB8.`B]an`21/_#4!3P@7' );
define( 'AUTH_SALT',        '}t+.dR&vCc24=A7UZ9i[SjHeru!fK:{1#f]S_.e1wlq7a,k85av8Uqj|;X~H@ZF}' );
define( 'SECURE_AUTH_SALT', '-4,cHN/(EvdN jC9 0dZ8?:$,$WfrIPN9muD_mbN_)`Ax[o0@*:lx5-Ejaqd^{z`' );
define( 'LOGGED_IN_SALT',   '3MtU :R.dSM!(dBrwMq|G=8z_|->kRplR2PeKhW3SCL`AI1Xabz#hLi6n%ZkhBkf' );
define( 'NONCE_SALT',       ')?q}B}0AuHK!&*R?6*a+aU<(>u 5-lS(]d2-]o+?Tb<!v:j8yUPzg`8Rvj;)$K5 ' );

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
