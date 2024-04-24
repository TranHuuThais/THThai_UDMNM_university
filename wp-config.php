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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         ':#H6b3Zz}08MlBabL}PLnt<`ruD[gsn062>UI $MVBeu2*EuMpVj1}`8)T%>At;x' );
define( 'SECURE_AUTH_KEY',  '-rJE6$[Lw}8;=CV.O&7tXpw%SQXY1|%<u}yy&Wk;bXO0R(!E0DAz|U-CWT33]_dv' );
define( 'LOGGED_IN_KEY',    'T; g{A/Hr<gg<$ebq&ZYYyf8Lw|&FcQDj`UU$B[t!}Xm2#W$^7aSbAdY5o2L.VzQ' );
define( 'NONCE_KEY',        '`8=OHP`<o+zK}>ZTo#jeEYT)|G46e VRnbR~&Z@C(921.#9I:-Ee-eOPmp{3UV:B' );
define( 'AUTH_SALT',        'DDa)c_I*5rm7|R1`p5gc4%(i+VcRC|V&G4yeGcx}]UAY,nNa&MhBboUj68t%q(|u' );
define( 'SECURE_AUTH_SALT', 'f*Qjod0b]:J)6s^bKJ_S8(xi;6[JnY!51JVs(WT;)FSPoMc@.S56NaxnG=5./3zl' );
define( 'LOGGED_IN_SALT',   '-k:xqBvfW!#%oG~IY:n)=?KACYBPe7,_f4[~qP*O}xr.z1ESXA.;MpvP53|DqaF>' );
define( 'NONCE_SALT',       'n({UT5EC8=$Y}$IvV{>beetqD7bi&_=l?kYw1Y2BmuOwm3i7d2HcStb]6^U*TMv0' );

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
