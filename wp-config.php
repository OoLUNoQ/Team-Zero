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
define('DB_NAME', 'project_zero');

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
define('AUTH_KEY',         '`(;_^36Mf2^r3|gK%X!LB2HwtDiel3Q=v.J%P3w380#G1*nvP@?xEO5N_/9TmQa?');
define('SECURE_AUTH_KEY',  '@N>EAIvRsP1F(ZF(:uG5WrPf$2ktEa`E vdxLH.35i$-68$c2)r-Z+@I~Sc%IJl:');
define('LOGGED_IN_KEY',    'gv]W5_wbkO|EAv,vf1|Q}-4MVjN3:e}9YC`aZQ$k1qRye7_(LJ#o#uO}s;klhy*C');
define('NONCE_KEY',        '3d)V%}rP}Y4EP>g5E.JdI=Ls=%hRxmoGj$wz.u/dyG^$nCRE+=@0,_7!^Pin+X7b');
define('AUTH_SALT',        '&!WFoqrgw&CsI^&A:^sTDgnmB&xxDv50oN$25A2Pg^8=u8syY!_4{ `PuhFuQ|1O');
define('SECURE_AUTH_SALT', 'H1x9_-^g>qroOODm h}>RWsaD$,b2,vf?tN,]AWGHZuei9$pZC{`jB8uva5~0_|I');
define('LOGGED_IN_SALT',   '114AzuFVS@c?q8rj5FK5/nsE73qC[DzAzfaObsTs^DH;)kRZTku@ljFBBs-Yt}^M');
define('NONCE_SALT',       'pxFk>^]4&Qjy`n@dfCh+C[A_N.wGJD*zj1[ny/5v(&{o+L )oIhe`,NE8b,b.7X-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
