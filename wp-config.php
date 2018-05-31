<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_topagent123' );
define( 'DB_USER', 'topagent123' );
define( 'DB_PASSWORD', '4Qceo58uRJSHDO7G' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'gxs_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ';b0nb914EC1G|V$yLO7-D.i8aWo=-kk@]Pt>EON+UR(KZV|Xy-bL*j/NI8C^OXV~');
define('SECURE_AUTH_KEY',  '::{u`mV4Zo}0dV*2R^x??2Q<M[mh,];()fS4UwFy>ZyUa$+0tTt6pV9~4N06F+H^');
define('LOGGED_IN_KEY',    '|dVI+(y~p3|@#(lrx(Cd9Eu% N0 [u(@E/BamF5o{QJtU}$&oxz!`w}oZW, 4 4o');
define('NONCE_KEY',        'J+L><A*=LQPXk~LtcjxNC7%PqGCSlKTmZuGIrh5-[&q=6X_L~(D_:R]=GtS|84MN');
define('AUTH_SALT',        'RA8-N??6N])hquOqb8bc: Gjp4t"FEJ+PQ)+rk%6+5^J?f-/`T5GMyLYD>";=*C0');
define('SECURE_AUTH_SALT', '|J[NmBzZGKIg"mS$4OK{Gk|OS$eE$Y l!ukWtGAcI<H+JHjWNCWxJBt_FeHnG:.R');
define('LOGGED_IN_SALT',   'K3Bl(JHDNPTZ`~ h">r!BO6Dr;M>%|mW5-M@X!(1CqNn>$)gj(oDFps7MXr2$$J[');
define('NONCE_SALT',       '5a}Pt]1aItc*%77SjNm}f)maQsN}OB>qeHx5p{6ko"IUd-d9XkKxb)s.`ZqOuHl{');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'topagent123' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'b44f0dc1121977c020c68636827129f8b6a1eccd' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100822' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'topagentmagazine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.topagentmagazine.com', 1 => 'topagentmagazine.com', 2 => 'topagent123.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100822', );

$wpe_special_ips=array ( 0 => '104.199.117.56', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( 0 =>  array ( 'zone' => '3ykaol1142m33plfcj15rdt1', 'match' => 'www.topagentmagazine.com', 'secure' => true, 'dns_check' => '0', ), 1 =>  array ( 'zone' => '110vrr3f0c42r6bj9k1zlfaf', 'match' => 'topagentmagazine.com', 'secure' => false, 'dns_check' => '0', ), );

$wpe_netdna_domains_secure=array ( 0 =>  array ( 'zone' => '3ykaol1142m33plfcj15rdt1', 'match' => 'www.topagentmagazine.com', 'secure' => true, 'dns_check' => '0', ), );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

//define( 'WP_SITEURL', 'http://topagent123.staging.wpengine.com' );

//define( 'WP_HOME', 'http://topagent123.staging.wpengine.com' );
define('WPLANG', '');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'topagent123.wpengine.com' );

# WP Engine Settings






define('W3TC_EDGE_MODE', true);
define('UPLOADS', 'profiles/');
//define('WP_TEMP_DIR', 'nas/content/live/topagent123/wp-content/uploads');
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_DEBUG', true);

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
