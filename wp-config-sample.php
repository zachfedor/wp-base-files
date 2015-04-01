<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'site_name_dev');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'o6*eC#z2G&]6A.+jgTKxq.,H.aj6Dr-qlGG-ldebqV+Y$G.-8j_b|Z/]V7y.Mq=V');
define('SECURE_AUTH_KEY',  '9tu^.f)zjr;6`B/svakh{|-G+)=#+_k 2H|a+qYp@;_hMGEddxR6H{N :@:N-R,U');
define('LOGGED_IN_KEY',    'lJ.U-N|^lY.~3*}qyU3#q>#tA&PeKEkI{tEQaYM5IV,Z7d`z`Zg}swZs|^_)T$ce');
define('NONCE_KEY',        '?7ME)7||xy7Xb$3|};iu`!x{]+D8bv~,rDXa5?8|lE~h02rN?LW`z]->$![4/sK|');
define('AUTH_SALT',        'D^Ix${.Lwp27llMIXBgXR TN3KwW^jf(12FRa43?2?]@6[~&HPZ:,52%~gEO)uM|');
define('SECURE_AUTH_SALT', 'Jf@](9u?[$lT<V{+v!pV!.^@cn|7,~.9(=ewR258 (TW+{>+ATM5<n?Pfs 1zNu_');
define('LOGGED_IN_SALT',   'EaEEnp1+NIcTds+GAc~{1G/z6AmQ3Mir]i5[||Qd0gC%R9`PP?CL-OV+K;_j+Y8(');
define('NONCE_SALT',       'z{Ia<l%Cn]yS!}|!N|$u2A,LU40KcOs@#+,pp$qeHQpn>M-t0orn- i]K7 `vi8w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/site_name/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
