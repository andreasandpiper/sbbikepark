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
define('DB_NAME', 'myfutu04_sbbike');

/** MySQL database username */
define('DB_USER', 'myfutu04_sbbike');

/** MySQL database password */
define('DB_PASSWORD', '6Cp3s@Sl!2');

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
define('AUTH_KEY',         'k5lnanldfglrqgdzlbzgamigjbtabqnc9thze59b60suyfygtugchalkdwtzx2hs');
define('SECURE_AUTH_KEY',  'pig07mjckbzd8own5fyvsmxul9nfww9zew5s4dlzefgvsk5coda7p2331ai5l9ca');
define('LOGGED_IN_KEY',    'rg54fmtzoiis5btnwoluylfd2qkyvrtz4uy6b68iuinjzuruf97mbbgunzii1b6s');
define('NONCE_KEY',        'dcx9iv9gbvamgxk8y7fum6kvclciv4dxrhfnqobhfmgcm8gngqckfvssq1twqiey');
define('AUTH_SALT',        'ejq4a7kmynndhonm7slyxaayquv1erasfw9ee3l776py3dewxeu9tgs1tsk0txer');
define('SECURE_AUTH_SALT', 'h2xnrijj041hysdenznlwdi0qc10bn5ce7ufbr2hmvatked8w0ynu1ckykbj45vz');
define('LOGGED_IN_SALT',   'egxpqfshl6fx3a4htgivsaodgjjrjefxndx0glt04ohypgpmgcxkzabbnuqlipjw');
define('NONCE_SALT',       '8kgimjz9wn0btx5pnc6duh84otqdxmbhskit9rfk4uvwf7zzpqxocbxpk9gomdtj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbv_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
