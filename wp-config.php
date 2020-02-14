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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '^] q^4iBW0|(twtb/jNa%G$p+L=aRDh&$1lpwk%LfFhasm}EOWXYC`TB54p.[dv<' );
define( 'SECURE_AUTH_KEY',  'HI =?kaGqJE%jnU_Xse@~h.)0+#Mv{i4_7!ZsFgx$N%_dFgW~K =C?@tBSLj8[+<' );
define( 'LOGGED_IN_KEY',    'rSrph$@zLBeqZN/+ -2J7 (`gp_hP3aa?c<E[QE.G/Y+%<(ct@L%7b1{}*QL7VUN' );
define( 'NONCE_KEY',        'p0;kXDbTtP{*GN.WDKH~q-XT42]3%71Uu<^Y1yaWSj+7i(]C^]H1m9=)1wp`&=UH' );
define( 'AUTH_SALT',        'nHTP9@`I|@w`:1mG*y^T_19}t,mU4i=[Lu8i~ta<Bs9/H(t}~f6g4%l>hkKz}yRM' );
define( 'SECURE_AUTH_SALT', 'H$rmj?:bAq42U:Ot-T;oN%+xg@sIzX{M!8$Z> W^%&l)[VSu9_a_5Bzysl=~Sf(g' );
define( 'LOGGED_IN_SALT',   'tl ybw;&}+&+`oA$ ]O|dKN/RHw+qz%wxW==5[{%yP0]{pT%v<O5)=+`uv`8@l`i' );
define( 'NONCE_SALT',       '!h_^>ASk~-[>ulSU8V!/.%qa8U3E.r!mMjf7A$2M][)Rl&E^#f&t_*6d1R:rhPG+' );

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
