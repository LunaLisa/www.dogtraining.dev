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
define('DB_NAME', 'dogtrainDBsekmk');

/** MySQL database username */
define('DB_USER', 'dogtrainDBsekmk');

/** MySQL database password */
define('DB_PASSWORD', '3KY0303Hbq');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'A+m.iXaPbLTH<ILA*uy3ymqfqfjX6XbQ6{7{,j>}^fUYzYMQFQFJ}^7B0vkn>oc');
define('SECURE_AUTH_KEY',  'tPmqeD26X6{;.;.<+b$*uTILmMAE2IMA^uy3ynqf]+ptitima9aeT29]L]*.x.xiq');
define('LOGGED_IN_KEY',    '2P96_*2;+xeatqXTAiPL2;IE{<uq.*miPyfbIEXTA6.*3{$yf<uqXTnjQM3UE{>u');
define('NONCE_KEY',        'ggVG0[-kV~lhOKCVS95_K1:-w]#wdZtpWS91aHD]#95_~lh+xeaHpWS96PL2;+x]<');
define('AUTH_SALT',        'O]+x]#teatpWS9iPHD]#.qieLubXEATP62*+{yub.qmTPjfMI<EA3^$3^$jfyvb');
define('SECURE_AUTH_SALT', 'pteaHH;]xt#_plSOieLH9SP62*+;]xta.qmTPieLH;]EA<.q2*+ieyumXEATMI{E');
define('LOGGED_IN_SALT',   'gnkUBkRN40JF}>vr|!okRzgcVC8RN40@G:[wsGC[|so!~khOwdZGCVS95_~1:-wd#');
define('NONCE_SALT',       'V1O51~-:[wsZVplSO5dKD9#_51~-h]xtaWplSO51WD9#_62*+iextaWDL2;+x{<uq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
