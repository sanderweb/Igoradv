<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u312445177_wyhav');

/** MySQL database username */
define('DB_USER', 'u312445177_jajag');

/** MySQL database password */
define('DB_PASSWORD', 'pyHuNyreje');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nY4bhI31SMq3MkzQaTfx3MShkKH1xIwSPt0uwEgrMNgwXO6Mg7edzGAFKoZUVw32');
define('SECURE_AUTH_KEY',  'ZWQaPjLZ8Ah5tQLbSY6mIbI7TVwBqhmsSIeS6Fp5A3oIxiEs0EfHeowh1kZYqtkf');
define('LOGGED_IN_KEY',    'UXwT7Sa8JLm74mZU6RFD9jxGjNKIjQ9s6vSOuhtkxZcI4fdCqoT9qH32cuHc8zJa');
define('NONCE_KEY',        'C4DwthPUtXwqSGZo7nIMDke2lKo0kfRQZ6FShNEiezyQUef7HUyTpkSdUiDOtqHe');
define('AUTH_SALT',        'S8NpAehuVs6PHegRdhgBq6ddpKH4MKoQ2XffAxU9PWcSuKTLvOhiI2TWIgo5rKU1');
define('SECURE_AUTH_SALT', 'piZxjEixyrwyB4aCEGcTFgwYtJZKIIH6XLfstmV1EkbHa6izjyYMYO3E30urYXbF');
define('LOGGED_IN_SALT',   'f40jOeV0rUjsGt59hLL9bR5uM1Hc1dghBOEGeJ6287U501mJjPxoohAq5BEE3kc1');
define('NONCE_SALT',       'mGwRE2pNWEiJJQxemI7abfLM5uiLF9uwNfRs7sxTIsaPh3FXDMnGVjCcwjEiHGu4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yq2g_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
