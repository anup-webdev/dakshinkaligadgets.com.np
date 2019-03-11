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
define('DB_NAME', 'dgh_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9li5rzhtlf65vsdyelv1kx2af1uiiym3uer1gtymkto7t0esepkbna2maa5vwbvd');
define('SECURE_AUTH_KEY',  'gmqu4eyicbiviwypdd7tnamcyfllvhauyo6e3rnm5ldgnbmfeu3wspvaymo5dges');
define('LOGGED_IN_KEY',    'amegbezdtje9nyyjwflzm9freiyb8u0niahepzlqvrnby2gkqqvwamwpyyijflj2');
define('NONCE_KEY',        'mrjhc5mzidc9x1syp20vj71dzdy2rnkg7fvog1ofzoyb1ixu6lf9pskh49e3vkr5');
define('AUTH_SALT',        'jmjmftiwr6mfrc7ntegw8ranlsn1oljzi0aaj9dbmtzyfurokprwwg0t3hh4s4sd');
define('SECURE_AUTH_SALT', 'gfkadg6oahz1orv0bmah19mumta4kwowk2xokwtrkdwgqjllcriku3udrtawf89h');
define('LOGGED_IN_SALT',   'famceuzsgfynpwic5ukh22xly8mep4mexpwwsv5bcjnvooxoyz9suvvkeqbaimqc');
define('NONCE_SALT',       'b2qwsfwcnblmzwhdhoho1ptmf4baymfdj8o52rvodtef2mezizxieeigythzhkmm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpeb_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
