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
define( 'DB_NAME', 'orizona2' );

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
define( 'AUTH_KEY',         '|3+_h/8Yt1hy}Li$?V8WaVyf/A$$8=l5CWJ-@p-*c 9#RjpPjT{O3QEkc3!WJ]iy' );
define( 'SECURE_AUTH_KEY',  '7usJ?<HB,F{Um0UCD]`TIi[SWudQ=#9,sJ>8!J[#BL^K!{jx}[zSCS0(#ei$ZmkQ' );
define( 'LOGGED_IN_KEY',    '<G_T,_SH4e LnfZnt|*;#uZ7z?6WwGUT;G=y$o{St*,KDx31`BCBm7AH.Gx |wbH' );
define( 'NONCE_KEY',        '!sp{@Ke6E|,kvWRZeq+%m.n5na<,AC)Kb<)<vrg[B(pvU/UC+Fbh6J(=Bt<EyN4`' );
define( 'AUTH_SALT',        '[gT8+#bi.c}3],_>G$r)V6EIe2[*SKPp%49vlijV2<r ;x[9w=orEYUN:Gd(SZQ@' );
define( 'SECURE_AUTH_SALT', '<`)!D&x-at(HjiREL**`+2(o)3kd-V^01]zCAoj4>9YN+&;.WiI~70HiO!~@M$[H' );
define( 'LOGGED_IN_SALT',   '[xI>C 7qo5*=rVGXYM/Dx*),@$)JWt}NhRy%-=|r1{}Bm%1XNwt8h)pjKm6TX*VO' );
define( 'NONCE_SALT',       ' rx7zA+g6uNDCk,j~[qR<due<A)`8R.UI6*W:-uPjO2)]kvNpq?9u,G_`JY6Aa%Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'oe_';

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
