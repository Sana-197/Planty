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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'H!/N!<B3TV(yCuDIKGmlS)mK:vbZ`,p<Y7dZsgO-)$J5K$eHz.x:rxi(DFG&OW9O' );
define( 'SECURE_AUTH_KEY',   '?0P6,J~Js$F)bXn ef9<Sd|8Lz,QbaC|^@P}dL<t$4GSQGv;cz7:NDOLgAfMfRnl' );
define( 'LOGGED_IN_KEY',     '6G#m{FU k8rx7$PAXKYl!-SeiM1)L&/W6z(DsKOrCLc%Hd9QYp)fOPl*#iQ=Z=T=' );
define( 'NONCE_KEY',         'Lal+h?i.ctaB^svb9{2odv$HMACJQidh{N.k.gK67*yI4piwlm52zo:kLspbAg[$' );
define( 'AUTH_SALT',         '2z26]<@`T|r0rYM(:l5#)Q|&tGifD7,_*_;~Ko6KT:a=B,n=#loiZ{tylYyk0NxC' );
define( 'SECURE_AUTH_SALT',  'e(9Q @I$h9[R^c(1kpe ^p0wz0jcg!edsXlJ2l|(/,f||H4XRR(nb2G#E@ V;OC.' );
define( 'LOGGED_IN_SALT',    '|E]_ui;3HF5OddC7W$^LB0Tq)9]!<!${kdOw@V|zS {[wD]=&XtieL66ow,bifx)' );
define( 'NONCE_SALT',        'W3msM^)Z2qDdh5`.|_*]|sU86!:2nj7|(.( Q>H/)p7kj_z$ w5 MA%=ORRRi$Z=' );
define( 'WP_CACHE_KEY_SALT', '0` eZdvjg2f7xG|3Mr`98K=:#ViF;G`Z|G>G^mij7.W)P,d&J16AbgQctKK03UQj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
