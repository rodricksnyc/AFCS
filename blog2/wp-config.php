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
define( 'DB_NAME', 'afcs40' );

/** MySQL database username */
define( 'DB_USER', 'afcs40' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N!S%SDu6EqvDcA0I' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-Xb6vtR+w*LF!+% 5B*xS;[b,fYzJGLIW=^=n+jnbTK|`Bcy 8?k&1_>kso0A&r$' );
define( 'SECURE_AUTH_KEY',  '&e[J}?1Ek+49Iw*W8(,]<+^OR?3f`xgDI}lVk%$v>BLeMMw$0B^u6gepR^Oqa-Z&' );
define( 'LOGGED_IN_KEY',    '8ZV>z&.(MlYQ#yJpojcIi^vF@_]_g3C(!j#%DM&dr!,&Sjag176@sB]Wnc2|l>B9' );
define( 'NONCE_KEY',        ')<X>+R6,Bf:<s];Akzlrh2pb[37Yu]Dzc~jT<O?Xut7$<&xGy)x>i_aN0,Wcrp`-' );
define( 'AUTH_SALT',        'k,< b)/N]GLjNkLezpf35<`LKJ+:-2YCB}W)<;W%&B8v;,4cwwa6k(T#jA#q)kav' );
define( 'SECURE_AUTH_SALT', 'NqQ`dS~|vrD&_2Y*_=;=qGDm<M&zbN>K|#! $;=Kp%I84Cm0|:t.xukDXWQ[BRG0' );
define( 'LOGGED_IN_SALT',   'ldfe8e45Po6*^|:pZR0DmH`~^!eBN1 xp}(>aD9m%:EGF&DBRad<(B(vP&gYz/4r' );
define( 'NONCE_SALT',       '~hDXz!FMF87e|:aYN KAJL-vR?i8:_k= eGkD1%%C#L)K 8CCznJhrzYu9?-_+l8' );

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
