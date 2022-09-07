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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',tBQ$4u^R`boZ}c*::)d+CqtNXGyzFpF4UJ+zy7jG8IV@x1FV&([`JOxcFz<(XV7' );
define( 'SECURE_AUTH_KEY',  'un;lHH@g3S=pcOyPOKx-P+vCdnI&U^JUO[#@.ju%+jh6g+{9qRu%f(by*c>0+(;T' );
define( 'LOGGED_IN_KEY',    'a:C 0UD|n=zr6lKBQ:?BD(`ak?[g8qR/i+eE/e`I,M`IiBn)Yb;5oXUeC:+hFv&i' );
define( 'NONCE_KEY',        'm4(Ow$pF5V+|I/n|jais!`<273^U q?R9QW2X/eXOGumO@,u*rli<;LmC~#}j8(r' );
define( 'AUTH_SALT',        'EQq:D>JY:d}s7NIW#%*frL%5Cfb +}90zRYExm`&M_>#IA_Z?6S8n8:-$oIvd)aP' );
define( 'SECURE_AUTH_SALT', '5eoMXVos>TS1KyRziY4`bdp-sGby0);sH4Ih8l4wHs|=A|_CPE2-BJEJ}!00:&;]' );
define( 'LOGGED_IN_SALT',   'p^Mppd%6@s}GLECw11/+zd7i&9BE;ySIa-kaC;o`AR5Lf:zLze~`@:z}P,MA}9ni' );
define( 'NONCE_SALT',       'm^UtCOf_Fv%7q&_&1Tj_RVOh|gN:eCxroR.#.T_Si@LXN(mT#GDO%UZOgjI%/1`>' );

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
