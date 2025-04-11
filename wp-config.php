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
define( 'DB_NAME', "afanasl1_1111" );

/** Database username */
define( 'DB_USER', "afanasl1_1111" );

/** Database password */
define( 'DB_PASSWORD', "!!WRTHd7uT9P" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '~qO(#F;H/+%UCblG+b`tZcC.Zm7~nU8>q/dB;n1%[|uTWYI~5yB,y}`1C|rcMJ[{' );
define( 'SECURE_AUTH_KEY',  'R`_#xq_QR7g6s>M:ORL=;ymEU3jPc5W9{Mga^7yX1~ *zD.auZ@G(`x,z3YMzj12' );
define( 'LOGGED_IN_KEY',    '&eNCn`TRyx`Hg[z@iEuUx`zl?2e)YTjW=/sOSKrYUm@>&3Y:M<Peo>]xU@t}Z+Ek' );
define( 'NONCE_KEY',        'ilm~Ezq~C.k`p i*l:+.zk] 7[b9#M))^__>c^@4L5-=Oi9+wEz8$TtTzuM42_+>' );
define( 'AUTH_SALT',        'hO`mQFKOqwOa6E)SnJx`~N!=dY?gb/4~u ^. 3I*,YRL6ao@19-`Dkz7W}|xx~0e' );
define( 'SECURE_AUTH_SALT', 'N$W:aXlvZRb42Y W<(j|tZ $Br9L^.JAj/NA~i{vWEFgm~Ec:Bo<6fNWX#E*&&p+' );
define( 'LOGGED_IN_SALT',   'AIB9uA,{}>)dWp60Ywp<G#u[C4y/[R(=_Vi)&}j@fI*XLIE#YAK+f#| yTQJGn_X' );
define( 'NONCE_SALT',       '8MY(ZAXUYmJJ.>93=NiflHTX~ov<M=vh$]vi#7EH4I#v|+n7rQ^!Kh(<oKL3_pLa' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
