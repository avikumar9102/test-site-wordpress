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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2$(6qP[X/}fPGCkxmfaDei!vyf3K{;Mn,wvwLpQ3i-]]IxCo*+M5|-l:I](4T]zM' );
define( 'SECURE_AUTH_KEY',  'cVIkRVC@ToimJ8]5eow~hv7_17FB_hkjBjw;1$4Lh%E{zRW/L-k~8cBVKgq0l&Tq' );
define( 'LOGGED_IN_KEY',    'GW.%;1AX9aQapkP8pUUAQR;$AD5{`RP1DkB<s;fhquLJjw)NZ:g-$bhGux|@`I5:' );
define( 'NONCE_KEY',        'es+NV8kWxjYziG?y$IQw1P9LJ=7$2S+-g_zjCtDO/y2KOn91G{4~09I&H<crt,fs' );
define( 'AUTH_SALT',        'wn@4,n;3v xet@2KL[q]tsMFXawZPmf;mk1:U&tI#:dgb6PO~<$^q9k?hT{ct%SQ' );
define( 'SECURE_AUTH_SALT', 'hq^w.FntR!Lb]XRp)%N{<o2j`hc}p@H7 ZUA+:<:apb=v>NtQ_87zMDbG#xa;&^3' );
define( 'LOGGED_IN_SALT',   '<3qJ@g/~6B5h21%B#Dl[2w9j>*v%wy*Cidm6HE+M`~LI=)&iNN}I+1|:Do=Bo4@p' );
define( 'NONCE_SALT',       'O^cdRj<w7Bd; 7#9P?Q|,0R9K?tW<2z+hT>Cgj8SiMCBwlW;#I_Cbk3a~`ahA7XE' );

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
