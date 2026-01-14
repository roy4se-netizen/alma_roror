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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'roror' );

/** Database password */
define( 'DB_PASSWORD', 'qhdks12' );

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
define( 'AUTH_KEY',         's; y-m{2eJ:e@b%Bf v$ZD=O~7RokbxjWdL0:p{7omR9+fV%PLo:SUu@SL8 `=;.' );
define( 'SECURE_AUTH_KEY',  'ci g`cU} u>h8z!MM@c^$@w3`MKFh8wvc|FSDPF897!_LF;qP2St?`X#vo;Za_pa' );
define( 'LOGGED_IN_KEY',    '~vBK8h`UeSoSEJY4>cU=6[ -JNc0#l#>9!Y*t[z0p6QFT2QfhFD~%3^6oIV*2,U}' );
define( 'NONCE_KEY',        'jEW,fG2NZlYQ :AiR Z&ZTCAza/R+s59~e:BW~P=>LlI$xz.yC*:A%q9YM(U}&S~' );
define( 'AUTH_SALT',        'ut8A1:R34H`A}40rq:|Mb`rfa&#nvabs5IoG>^$MhoBP,D~rvR2+GYzOZA1}Zvd>' );
define( 'SECURE_AUTH_SALT', 'ZI9Z*L%AIGy-AkmpA`z7p#heN`2.;e@Y.a;1e+O(2CD_4!E.!sd3|N)(4D<GIk83' );
define( 'LOGGED_IN_SALT',   'ym2[wzE5xEU)8$xZ/k8K aj-I,U(FC55)NYF]C46({P,$9A%lR<@h-b2=@@i09PE' );
define( 'NONCE_SALT',       'oV]ond2]7Khy}?2!9$0&+/n8&FezEbOB$9u6;-ih(cEwk9uham96+o5$^LK:Ap~h' );

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
