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
// Enabling plugins installation locally
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mkf_chemical' );

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
define( 'AUTH_KEY',         'hhBLVdTui`Fg1K]TzkRE:KB<6W_HXOOCrw![$4X-z IO^f $^KkBW4a:EV`evkjE' );
define( 'SECURE_AUTH_KEY',  'QSwCi8<fvI]_8*y)O|MTK9R,W3S8C/tu#^`W?/_[[zRm|U#Hufap?]j+.5pSvIK~' );
define( 'LOGGED_IN_KEY',    '~XV  ?dBMbB1~(3Mcq:[V ZK:K=Q9~N?XPCYEP`{?};5p~jCg-|zPdw*5eeE##qV' );
define( 'NONCE_KEY',        '#g{,.B6LA=j =Dsigvn,sAN (f69;?!J--aOuDLK(h`N<P%io=6@aa-iZN4p~s67' );
define( 'AUTH_SALT',        '[aBD5c56KI1pUKJ.El/v[=>ixB*vNZF@C^1zSZY,`I|Hg|>nMI`adpp9Z.M9Y!.0' );
define( 'SECURE_AUTH_SALT', 'Cl@p;Y8Pg>=9$u)*w/7m;/u/4!?Q]#{Br2rbCZffS29kof=4*N.73Kz4qrFi.dLq' );
define( 'LOGGED_IN_SALT',   'QpU;3.q]-#+o|Nm|q4Hv^cwx;]9W.5?yqPX:d3z(802OphUqpYRp8Fc1GyFhV*{r' );
define( 'NONCE_SALT',       'Z7XX>^8b]5m076)%HI<p6pg__{$j,38@ }l;og/zGHIiNX_E/hCBGVM_(XKn0Tua' );

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
