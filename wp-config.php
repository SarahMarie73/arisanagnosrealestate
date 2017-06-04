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
define('DB_NAME', 'desiilup_wp655');

/** MySQL database username */
define('DB_USER', 'desiilup_wp655');

/** MySQL database password */
define('DB_PASSWORD', 'i(957PS9X@');

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
define('AUTH_KEY',         'sn3zr7jfizdqfyspm4udlzyweuhpbgk9wejzhuzzdrdgxlg10qcfzbfjcucfyenv');
define('SECURE_AUTH_KEY',  '2hr4z6nsfytzf6zhwqassmh6m6o14m29829aig3fef1e1scfd2vs8bdavuou0gdq');
define('LOGGED_IN_KEY',    'f9bee7iormimogbrneqclopyhprhzxnvolvsknhfevgzl5ydlwyvjteewzzjwtxm');
define('NONCE_KEY',        'xi01jcl17acswkyqyeab9intvncyiklr2cnhc21nzqtbtxnybtpn9cyfkhshsayo');
define('AUTH_SALT',        'wkvbiwbrx8xefqprvhdm9j74qajjezofw2hqamqknp8dvp4fkplrkty7elnn30je');
define('SECURE_AUTH_SALT', '80abikwponyt50anh2suxssv0myusjgecwfyu2q8d4a92w5hgu60c4nludjzkwz7');
define('LOGGED_IN_SALT',   'tlqizgur9kox7yxapojgknn8gs13kfx2swvplcvw1ikartb56fj1wbzq7meztxpz');
define('NONCE_SALT',       '6zvbxajos59fqyxnlyrsqlaou7ht9vemkxsatuyznkniglqfb0keqjvh0h7mslms');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpb4_';

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
