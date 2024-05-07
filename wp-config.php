<?php

ob_start();

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

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */

define( 'WP_MEMORY_LIMIT', '512M' );

// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'cpwcckandc_wccdev' );


/** Database username */

define( 'DB_USER', 'cpwcckandc_worldcares');


/** Database password */

define( 'DB_PASSWORD', '$p}cE6oci6^&' );


/** Database hostname */

define( 'DB_HOST', 'localhost' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


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

define( 'AUTH_KEY',         'hG )G!_ nG~r_2aC{})hs*Zn;c3R-ednXO mGfC/?)8xE2!v3)K-dh+b8E,%/aF%' );

define( 'SECURE_AUTH_KEY',  '$?&!~hl+3|@*&HB*ukHrbfgK^d):g_6pjX13Xhx1$L6z/k*s;9Y?9hqdlB~J!!#q' );

define( 'LOGGED_IN_KEY',    'r8|rt!A,,R|<Xna0m]?U!uh>M;eMgL|rLPPdJ$E}@c=!d<qE!b]u?`6/LKT&/C$w' );

define( 'NONCE_KEY',        's$_`}<Km^#WkRwl3<SSUzBt7>QS/IMWFdS#68hDRZoQ%VZl=Y=Vlu-QJBS}6hHVy' );

define( 'AUTH_SALT',        'y]XV]rCjnpTXp@n`GA%ZOt58|>:8}3?@7mwY$TPI/Wu...#i#j%@7bY+O-dQD0 y' );

define( 'SECURE_AUTH_SALT', '2HT+Ry^$+QF{10iFGY4`-d ihf 0=Tf8WjD2zDw DB?^U7#Ich~. LzJh)*-8r0H' );

define( 'LOGGED_IN_SALT',   '.mFbs&TCk5>0xD={p6M%{!M!k9}ua}#GM+.>/kMM:+j]E[2$COJBXoxTjx[qIUxY' );

define( 'NONCE_SALT',       'uicWp>z+D&H)p)+2s/>;Xr+1hpvNB0@Yuf2oD~L6D-t$Dv[*vwfh0-K-i[PJxbBU' );


/**#@-*/


/**

 * WordPress database table prefix.

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

define( 'WP_DEBUG', false);

define( 'WP_DEBUG_LOG', false);


//define( 'COOKIEPATH', '/' );


/* Add any custom values between this line and the "stop editing" line. */




define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/*define('FS_METHOD','direct');

define('SFTP_HOST','159.65.151.159');

define('SFTP_PORT','21');

define('SFTP_USER','root');

define('SFTP_PASS','YvaRP3usHy');


define('SFTP','false');*/


/*define( 'SMTP_USERNAME', 'lJdO9RvVSEegVWUAAaggIg' );  

define( 'SMTP_PASSWORD', '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' );   

define( 'SMTP_SERVER', 'smtp.sendgrid.net' );     

define( 'SMTP_FROM', 'WorldCare' );   

define( 'SMTP_NAME', 'WCC VINAY' );  

define( 'SMTP_PORT', '587' );     

define( 'SMTP_SECURE', 'tls' );   

define( 'SMTP_AUTH', true );  

define( 'SMTP_DEBUG',   0 );*/


