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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sanjib' );

/** MySQL database username */
define( 'DB_USER', 'lokhu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lokhu@100' );

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
define( 'AUTH_KEY',         '&[0wrwNKN}pDFeBThvBl6R1FEA$<:(d)pB@O|X)KY6;lJEK_Qej9-U&92hIcQdZs' );
define( 'SECURE_AUTH_KEY',  'gAbH]SL|Hxr~+!P@KDx4y~._@o5du BOawl=sC((xLfo*@u#z1Wd}PJo(?h[9A61' );
define( 'LOGGED_IN_KEY',    'AomPk9q_)L&yFDPiO(Qv]s{2N</^,>oo)71ogm;0_|$%i#:`UM+ItKolq[(u}(!s' );
define( 'NONCE_KEY',        '$dw>fsKC1s4$WX8S4UvR^HRH2:!FAQt)2]^%yVZ+7le}`uP#^pb()xLvUku`jQM]' );
define( 'AUTH_SALT',        't-o>s^z8Lrf5hcwCL-Fa3DTGbnC<^bQf8P_,S5eD !XJg8AlMYJMrYnIJ3S@rLR*' );
define( 'SECURE_AUTH_SALT', 'F8!&?anzNqPMaK1f2uqBK49eCu3Nwnj$wySt`wg>Ea}/oxK9;  Fjrk19b!2|pHY' );
define( 'LOGGED_IN_SALT',   '>7-ju^xbh5]$8;X[W7!9e}0t]cPgK8n7V!ihfT574aa%8a?9_DV;Eq@U%=nl>Ro&' );
define( 'NONCE_SALT',       '>FMw!l$jh-90+IB?w!NK~6[1^-q2m>G_qms~L4M:)JAbR[}^14k`YA/p:=8C):S:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

