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
define('DB_NAME', 'dacorthanhchan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'server@123!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[^2T5[g;=S<t%tG#p@q`R+.PCFOn#V]Z--=a@f(sab_5[TeA>,$#/tERllPb`z/.');
define('SECURE_AUTH_KEY',  '$~*St.bk-P)^n:4QvynKu)2o2FOI*EjPI0Gs?2Q8a(h|-h>sw8Q~,&!,O]h<EW+5');
define('LOGGED_IN_KEY',    'V.1wa]h5x}S!<e7nf~wXQVYq*R:DTx_qShy g@&yg!0`bl0%KAy<dwf#S)IfU8Nu');define('NONCE_KEY',        'WGt-sAcH~Kw7HybaP0YV1:jn>`ywSchzuA0EH%v{Do.&WbEcU3~LC5FQC>G*iD%o');
define('AUTH_SALT',        'ar(]qW?+jS3M)*s-}p4$?$i1?@>G[|kPc>N__-,+yN1(<$yec@c+)W+`%x(Q#^S2');
define('SECURE_AUTH_SALT', 'G|EkM=Ep;=_>KxP-a}Nz=Dvj1z?1r]}Ru^(fB}Hx&M(;&~DVYAU#+]V,/;Hu5O/c');
define('LOGGED_IN_SALT',   'Y*k/[G6B08z@2j^G)O69D(SwwSAHu@mh48wjp4w{T&<&b -5=&S7n|-.O8_br*U=');
define('NONCE_SALT',       'C74uJS<b$#rBs%2G1440#mnUDF&<OCtw@0x^Gsy/A#Rn.4!<-4B:)Jd2n/h~FV)Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

// SFTP (SSH) details for automatic updates
//define( 'FTP_PUBKEY', '/home/wp/.ssh/wp_rsa.pub' );
//define( 'FTP_PRIKEY', '/home/wp/.ssh/wp_rsa' );
//define( 'FTP_USER', 'wp' );
//define( 'FTP_PASS', '' );
//define( 'FTP_HOST', '127.0.0.1:22' );
//define( 'FS_METHOD', 'ssh2' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

