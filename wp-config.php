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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Gtx% >d#n2[Hy6SP!!$IWV3[{[UImWg[fH_]).!h3w~Vt&(Vh4Dvm{:4dkpW2;ks' );
define( 'SECURE_AUTH_KEY',  '$ 8-0g#-nf,Mx[]k~4rydX0C}/`NtdyWZf1!KO>ZlZ*:Y-tlOA:%uMP^Rb28yFHN' );
define( 'LOGGED_IN_KEY',    'IAz|jKwz%pS +3t)C+<TI|L3ocA2_{H$F|/HBWuy?e#UFoPcGr63t~ {cpsS<ex3' );
define( 'NONCE_KEY',        'o)<)Wj-IdRw>R6/VVk);`9ixp6@AGvB{G@$nF3VQ6V.G+fWw-ZNGwbwEWd6ub2(<' );
define( 'AUTH_SALT',        'Yi0(gt~zB~l|_~mthyrj?F>B~dj.B2An&#Vc?*8(gWmM]V=K5Y#q>a x^~}u^Oiv' );
define( 'SECURE_AUTH_SALT', '@@Xa2FT&A,braw%>psJ]!^$bWfSdp*QB.u%9TQJ,*zN35#e9L@[gGo#FAeG.gp/l' );
define( 'LOGGED_IN_SALT',   'g|mooE67Box)f|D|uPY=6ye|TiiP!1_;H;HZ<F}JA`{xc`}@p@dj{V1547?<NdM9' );
define( 'NONCE_SALT',       '-+i!o^dpfF_nA./ #~6I-Qw1i>e|n^!FAnAky9m$E^A8.5`[O#64}I}ibEB^VM0G' );

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
