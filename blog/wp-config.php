<?php
define('WP_CACHE', true); // Added by SpeedyCache

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
define( 'DB_NAME', 'scodclinic_wp16' );

/** Database username */
define( 'DB_USER', 'scodclinic_wp16' );

/** Database password */
define( 'DB_PASSWORD', '8.v)F2p2AS' );

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
define( 'AUTH_KEY',         'upwawxob9doku3anytsakkppxewxl7nihwcqackuabhc2dynygf4xpklejspirmk' );
define( 'SECURE_AUTH_KEY',  '7hsb6lgu9mrgkmxsh2uvtfeq0xo3uqhch55glk4eyby3g7yll9cqdzhdmgdbqlgd' );
define( 'LOGGED_IN_KEY',    'xekcheb7jk2amxuozbj5dlo5kzyf1htpcyllx8dvrqynxfohghzujtxkqx6f84l4' );
define( 'NONCE_KEY',        'rxtswm7shv47vqqudzrlxnh90bx3rt5rtnxjimrjh0z5z9pdhlyw44dk37aftkjq' );
define( 'AUTH_SALT',        '2dkv4uvurwpqpzxwpkvnjkwkugrg9d2uvoa8fdrz5w1kq9ti5omirpmhdllqpcyl' );
define( 'SECURE_AUTH_SALT', 'vo5cjjsdoj0avscce7oemlxd3n19fnikeekxb1w2o9tnn6vk1ot3uhnvcg21m1ru' );
define( 'LOGGED_IN_SALT',   '6wysfiop3nntmbevsp4ryk6zxijllzljhtlupbsf3fc0vyobauc8xwjjixavejei' );
define( 'NONCE_SALT',       'im8swrvnb7yjvutqyaofvkuftfi99mk6ygnjmq30yxwlapb5ezolnauoicd3afgy' );

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
$table_prefix = 'wp3g_';

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
