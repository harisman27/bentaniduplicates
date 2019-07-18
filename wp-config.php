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
define( 'DB_NAME', 'website-database' );

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
define( 'AUTH_KEY',         'gSUjRXxDqT^Ampm3<tciUd@_^-FI6xtEYxD2CQ=cF,zi6n&i8%S%,*_=C.xY^=}n' );
define( 'SECURE_AUTH_KEY',  'oByCc#N+@h4[>b$[6}+:#p{HL$_6.l*Q7DQ&k>i-h6^Dbea%=<UAR>}AkpPF5J~j' );
define( 'LOGGED_IN_KEY',    'lIS/m_mTUeLC[>@ZD7{WO:hu@?s2vVz{.&:^73,Mk6S=m%jFQ#Xmm,BgHyI^:}n@' );
define( 'NONCE_KEY',        'ZeH-D>*x ZaL}Mjpiua_);vrfS3}[Bc-1r$*MQ|wuD~{%SD0NTLM/a-Y>ZX~h#Ga' );
define( 'AUTH_SALT',        'n?kA:gn;e)J3B(`E:+3ExHzf%CwzG_ofPJdCmz~# R0fpxm7J@%]x#{?HYR7Zj#;' );
define( 'SECURE_AUTH_SALT', 'kw4xCBe66~{f-0l:6)=+a[ad;w0~nU_a|]z/+!=rb~Sy>zV:D}OuAy7-_:+u(h@l' );
define( 'LOGGED_IN_SALT',   '<y]f|t?(V7u 4|)>LFw5~W8v.m%+m<%Y&3!/3-NADwZk[7p4CJ4IO,ND;3+$jclY' );
define( 'NONCE_SALT',       'c~G}go0)94|j/Cd%=@Yd<JkCN`QgT_,}upDaoU@L8.G`H0{mvFY?,MCzql5k3A[9' );

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
