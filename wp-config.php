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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gym' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '132444QWE' );

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
define( 'AUTH_KEY',         'j=:)f|4,+P5w>)waotU5pE|uCLD~@X3Yc.^?K[b8T!Pw9pBr6a%osFQmUY*!3Tx.' );
define( 'SECURE_AUTH_KEY',  ')-i[)3tHs&6`0,7Ca~a-H1j )?fnioTP^S %t(?XaRRbjsuGJYiG@<}#bgLppe{6' );
define( 'LOGGED_IN_KEY',    '}_Vy%WGxH+EZeN$r?[|UtDLvyX;j%@ns,H&J+-,RBLES0>B0j7Sw,<eFm>zd|()C' );
define( 'NONCE_KEY',        'vM[(1ApQUP,!ogJ%pis(`0WT!m=5iq^P6LU1q)djl=$c/lrw:UKd:;m_}e:Z^rDk' );
define( 'AUTH_SALT',        'g9yJT}1!zcIJ4=XCRA++Cg2v$(s^CD)=(;5,}L>z*T$Q8%38`An;E2X)IEki3EMv' );
define( 'SECURE_AUTH_SALT', '!H}f|e<gv]mQo`[Jfnr//~A)4[$/|z8{VH|i0B1]!-lxf)~_*[MnXDouB%J{#il<' );
define( 'LOGGED_IN_SALT',   '-n)!*3#Ju KbSN]2NlzjIzhP2396^(nXN8Nucu,>,Ik[ha^dIxd8GXe<BzpWa S+' );
define( 'NONCE_SALT',       '4QwjTzUga=>E=+(jeE.dT/Nyouy^FYO^bj4iAasr>Dmv}i2g2dyU c*jxL9g._2F' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
