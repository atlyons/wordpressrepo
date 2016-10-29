<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'kinfolkdesign' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define('REVISR_WORK_TREE', '/Applications/MAMP/htdocs/WordPress-Skeleton/'); // Added by Revisr
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'Ix+k<G]x6x(WWZVl--O&7h-`iCf+)1gaA-qa%W4+%@`Qt-9NTfqkc!y]>XzJXch}');
define('SECURE_AUTH_KEY',  '_7dE%{5hLI>r3|L68;N%$fN cL)4ZB~sqM.~6o+BdpC(2Q[Hph,xWd7?$]+6-!Jr');
define('LOGGED_IN_KEY',    '#d_}c#; a8:r?}}tWCN0:(oF.DN97IZHbcUCfH6FWxn?]-/2xIqChWIAHpmk*lPk');
define('NONCE_KEY',        '1Rt[p.Uu7-N_rNLx!$;|VBu}w`[V#7w;v<76Lbti#{Dm`[cFZ(=a^~zw*g5;?0XW');
define('AUTH_SALT',        '7l+5>]vw%Kg:9,Zy`X~x~+v?6U$v6?eVuYZ$mkjakC?GZ]x}YxAWK!>W#^a)j._h');
define('SECURE_AUTH_SALT', 'uQBiz^M(nQFt`tYZRl48pM;40<^8[y^:X^--Z5mC#Lo0X;d4{D%h-[s@|NZUd<2 ');
define('LOGGED_IN_SALT',   '4/D~NckkjbvM p*BVroC:gu b.5Ai=|K4{ow i|B|Z{2Zz/-nM+GmHv|<^viao-z');
define('NONCE_SALT',       'cst|21ugBt@[`vI^+Gq>Q16HZ<N+2J6m`m7rw%?D}mGWS`U/9`%,k_e+6D.7xgk#');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
