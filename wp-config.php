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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Eqj/krkxvffXYEZ9N0nlH8ljXeBOVvg5HIpSZ4ff8EjcexWPCxVc0OQoqxwaH4TuhFlwJKoPQedm5WRMgKPLIA==');
define('SECURE_AUTH_KEY',  'SiL2ytzkWuQQYaethAyL87lAH2X4F9moR/p6nZC6Ql+kwBCOPHdB99GMyaFuIE/+2uib984gcQB9pefwH/nxMA==');
define('LOGGED_IN_KEY',    'Pu3pfGxhFgNXjnJ5jMrSAjlFFZnWX6iBjVyw/d30e0FEhDJ+diZnpHDalyHPIK/h1l2Iady1iKggQ9iwxTCIvg==');
define('NONCE_KEY',        'L6pKJ4qgKaXylmKUH3lavJmQHlBowKGCLP1sJeXr2SEQaiyi5+8ONYMKriqh/LRSeyMShgsSTU5ps5aOEUKzSg==');
define('AUTH_SALT',        'tjGitg5C4iNku2GJU3fO4R9RaoSl5szKPX7Je4sqPA2GahEe+Dhg38LF5A2By3tMmcPi0ZrjNdASBJaPXGcBTw==');
define('SECURE_AUTH_SALT', 'K3iATXEkagBvAdjtYv2dc6e0i6lHJ9aqDSY75b86SPVV9/jCUBdD+fIsXgQbbsK/DvqJdHqfkhxH/0agSqJ0vg==');
define('LOGGED_IN_SALT',   'cp/MnAYnmocNWAG6+b3nVzkoTi0OoGd2INAeTmkKJW+5+D+FdZLcH/MX2Y9HVxAvDF3xffgUGD89mM79AxgyrA==');
define('NONCE_SALT',       'IaGvW1cUbd6ga1dhcQSKMwaFTFxRHiwt0/hhyuivhOKvmI88F6AO2+43pjIhnHZ+1q9MtzL+guZrdKlJSjk7yQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
