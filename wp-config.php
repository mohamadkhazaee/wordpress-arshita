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
define( 'DB_NAME', 'wordpress_wamp' );

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
define( 'AUTH_KEY',         'GQ Jp|W|J.ewg)FMw@:N#.W,GXeUHF#Md$Ixr_@b0_v7FEZWjb~lMch F/<vu1:`' );
define( 'SECURE_AUTH_KEY',  '{S_s(6mGujWl>L#Qr -${8zfn,&{9K|64wU:^L&%,6LZEE;7I@cWtf]>lyuGF)t:' );
define( 'LOGGED_IN_KEY',    'n#75 v[$ykDp>i2@zOU:.6)<9fk#/cXzSTeti,NJitC]9SD$[>-dnj~8Bf}h9>>+' );
define( 'NONCE_KEY',        'Ip]G?^zM;IIExoEv.N7ST7BO%Mb2+ KiG59.:AM[Id}kdzy{AE%oOUNKY{fO3_c(' );
define( 'AUTH_SALT',        'C#7$3/OX&giD_7-W$+L+Oy)f)lrGwU4[yoPLnNMA!huhGdYB5pvzio+H{!|<4M`}' );
define( 'SECURE_AUTH_SALT', '5]gcM*&U,b)p#|29$Qh@*my#[F`L|k?g!p>CJq,+tj)Q10cBS&v[vn8?q``Cm_*p' );
define( 'LOGGED_IN_SALT',   '/F_^}H(x}_qCUemJh &X(@C4X[uaan*Tu}0e3WyejY<E-RIVbd7n&WUUn1:DyZ(A' );
define( 'NONCE_SALT',       'iw/aeYOUO^H]=Y&<8Nh*xY,J:KOtY={NlZsP8N,(:Mhv%yN7>7%NmrO]F)`exc|)' );

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
