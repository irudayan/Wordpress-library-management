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
define( 'DB_NAME', 'library' );

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
define( 'AUTH_KEY',         '3H4S{~Oh4~;C5&}zU:)[/nwepoe;bv&)p0Y_^jS[rNqP.pGU%0,`/n(%M.F!Cl-&' );
define( 'SECURE_AUTH_KEY',  '46:qX5](/dg6r~W*@,Eqih4@m&H*a+CU<4z0$6PLO-Y~7j}JzMW?.}93Si~0nqR2' );
define( 'LOGGED_IN_KEY',    '6@$C[z5S<IxSZY1Xx+P*S>oh+s1T,_6g} bh*R5jW:-S%WZG2139ZagbJG1T[lEV' );
define( 'NONCE_KEY',        '%u<lrJ.Yp.^E,no_w$Gk|g(Py&J[-Wfg//U?Kn!*I$/8oX0LFsB/PM>DTX)k.$|h' );
define( 'AUTH_SALT',        '`E/5Rl=@SH<U4rbLT>W8Xc>]:M4O3B8K]gt(R@=2t(tcn}(^|}pNXJA$}~I@],`N' );
define( 'SECURE_AUTH_SALT', 'Xb>Zi/z +zhR4[^0PbbOG*K?WR;tn)`S9QF/Z@]=ZgJ]irn`84ZGiGR71Z`W)yXM' );
define( 'LOGGED_IN_SALT',   'L#k.Q*?S/,9RRlY6^@/HW;SL>LqLmZt)1jB[~W]nT!ZHpwL[Jl}SE.A^BCL*ziJz' );
define( 'NONCE_SALT',       '^NjujaE6SWroU8`UqS!|_,*V8FvyJbTEi7&2&6a/;&78|,wk1Q/L^Sg*O!=kfQmP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cms_';

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
