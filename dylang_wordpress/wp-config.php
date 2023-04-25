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
define('DB_NAME', 'schatmijnhuis_be');

/** MySQL database username */
define('DB_USER', 'schatmijnhuis_be');

/** MySQL database password */
define('DB_PASSWORD', 'mEFvsxuc');

/** MySQL hostname */
define('DB_HOST', 'schatmijnhuis.be.mysql.service.one.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd_0YHrHeCS._8_^S=5Cw60$HDo*JA=JaI78;,|Fh?>Kry+_teNi?mS,p<-8ktT06' );
define( 'SECURE_AUTH_KEY',  'HsL4o  V+j($x$6:,bGk*/rj?&nokTZaLOU(F38=w6ycef0LT)Yt7.8(]GWJ9K|>' );
define( 'LOGGED_IN_KEY',    ',Qj__^1{m=j]OLWUc8?:&TiY;fa#7Wbf,q79r`d3? =c2KE%M-tV$JnTJ]!bvpcM' );
define( 'NONCE_KEY',        'Ii8g-XhLRImikpMPhr(I~UY2^y1F.kr7*W$EP2b$*q5k4){bLUFVbpp$G{w3~=I0' );
define( 'AUTH_SALT',        'K5[DNg;eSO4uaJGXt]M~y)C-*/q wFypU.S7)-C%n{(bt=iez0O~u>$!?=rFg%sY' );
define( 'SECURE_AUTH_SALT', 'L|y PW*l{ :zVo%VGq%1fw^xd}x.irrf06SzY5@61b_=$ruLU<_cUzWoS$.L$OHW' );
define( 'LOGGED_IN_SALT',   'Z3: Nq[5]$.x$vTQ ^^GX-myP##JGdp#30tqn78dX}EXYAy3{*(PItF.+F_y:>#K' );
define( 'NONCE_SALT',       '0]!wyqv2>[TlSl[v6q++N<ZrR%s,3VGW5vzoUaXe2#*S9[]7!l/^K_7Zh.YS<M*4' );

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
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
