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
define( 'DB_NAME', 'mandekos' );

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
define( 'AUTH_KEY',         '2`6^NE;1@gtx:r<1}~|@9K~-%StRf*:0D=N&14SH]uDA+3fKxVUC.v1bV8Rs]Lv<' );
define( 'SECURE_AUTH_KEY',  'jBT3&H]kcugQR1g{(S=k.8|s(fJi#g:N@NvGA{N0qt>0vN+._,9=]+2}@**5B**C' );
define( 'LOGGED_IN_KEY',    'eT$ONLb8=-RE<7P&^)TGYw!fAv?Z{!ygare9lZ[#IR9Tz;%g9OM(sQ#DuE?%!w*7' );
define( 'NONCE_KEY',        'bIo%`EX~aWNY=oV4_xv`4-UCs?;6`Pf5nVY{YEpD@{)Wis,-0iyLuVIN88$UNv<B' );
define( 'AUTH_SALT',        '+QD_ (1u1HM[RXgssbM(fDoV%;Bc:hb%qh`m5PX]:/6XsQK U}qeyn6>!~ZS,2XR' );
define( 'SECURE_AUTH_SALT', 'O<<nZSU :.WX#4l-w I*/7%DAV<*&zsYK`CHr-b%NZSsu[qH^iqc;7jnWM?5AU[ ' );
define( 'LOGGED_IN_SALT',   'u:_jk=dhXtw  t]=*#PcsRn&ny;npb!4?y#|<<@H._ehv}y:Z[J*nNDLu<) K5 L' );
define( 'NONCE_SALT',       'U}-hhT>d?M=4hSM<Hb_yV5^^PebWEiN>(p0E70Be*MVbTBvnxO_y ;jiJ~V_8L6M' );

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
