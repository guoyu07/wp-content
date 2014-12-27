<?php
/*
WP-Cache Config Sample File

See wp-cache.php for author details.
*/

$wptouch_exclude_ua = 'SCH-I800,Xoom,P160U,Nexus 7'; //Added by WP-Cache Manager
$cache_wptouch = '1'; //Added by WP-Cache Manager
$cache_scheduled_time = '00:00'; //Added by WP-Cache Manager
$wp_cache_mobile_groups = ''; //Added by WP-Cache Manager
$wp_cache_mobile_prefixes = ''; //Added by WP-Cache Manager
$wp_cache_refresh_single_only = '0'; //Added by WP-Cache Manager
$wp_cache_make_known_anon = 0; //Added by WP-Cache Manager
$wp_cache_mod_rewrite = 0; //Added by WP-Cache Manager
$wp_cache_front_page_checks = 0; //Added by WP-Cache Manager
$wp_supercache_304 = 0; //Added by WP-Cache Manager
$wp_cache_no_cache_for_get = 0; //Added by WP-Cache Manager
$wp_cache_disable_utf8 = 0; //Added by WP-Cache Manager
$cache_time_interval = '600'; //Added by WP-Cache Manager
$cache_schedule_type = 'interval'; //Added by WP-Cache Manager
$cache_page_secret = '9b6a7c739a9f95fa60b3275e0daf3f44'; //Added by WP-Cache Manager
$wp_cache_slash_check = 1; //Added by WP-Cache Manager
if ( ! defined('WPCACHEHOME') )
	define( 'WPCACHEHOME', WP_CONTENT_DIR . "/plugins/wp-super-cache/" ); //Added by WP-Cache Manager

$cache_compression = 0; // Super cache compression
$cache_enabled = false; //Added by WP-Cache Manager
$super_cache_enabled = true; //Added by WP-Cache Manager
$cache_max_time = '1800'; //Added by WP-Cache Manager
//$use_flock = true; // Set it true or false if you know what to use
$cache_path = WP_CONTENT_DIR . '/cache/';
$file_prefix = 'wp-cache-';
$ossdlcdn = 0;

// Array of files that have 'wp-' but should still be cached 
$cache_acceptable_files = array( 'wp-comments-popup.php', 'wp-links-opml.php', 'wp-locations.php' );

$cache_rejected_uri = array('wp-.*\\.php', 'index\\.php');
$cache_rejected_user_agent = array ( 0 => 'bot', 1 => 'ia_archive', 2 => 'slurp', 3 => 'crawl', 4 => 'spider', 5 => 'Yandex' );

$cache_rebuild_files = 0; //Added by WP-Cache Manager

// Disable the file locking system.
// If you are experiencing problems with clearing or creating cache files
// uncommenting this may help.
$wp_cache_mutex_disabled = 1; //Added by WP-Cache Manager

// Just modify it if you have conflicts with semaphores
$sem_id = 855348780; //Added by WP-Cache Manager

if ( '/' != substr($cache_path, -1)) {
	$cache_path .= '/';
}

$wp_cache_mobile = 0;
$wp_cache_mobile_whitelist = 'Stand Alone/QNws';
$wp_cache_mobile_browsers = 'AdsBot-Google, Android, BlackBerry 9350, BlackBerry 9360, BlackBerry 9370, BlackBerry 9380, BlackBerry 9780, BlackBerry 9790, BlackBerry 9800, BlackBerry 9810, BlackBerry 9850, BlackBerry 9860, BlackBerry 9900, BlackBerry 9930, BlackBerry9500, BlackBerry9520, BlackBerry9530, BlackBerry9550, CUPCAKE, Googlebot-Mobile, bada, dream, froyo, iPhone, iPod, incognito, s8000, webOS, webmate'; //Added by WP-Cache Manager

// change to relocate the supercache plugins directory
$wp_cache_plugins_dir = WPCACHEHOME . 'plugins';
// set to 1 to do garbage collection during normal process shutdown instead of wp-cron
$wp_cache_shutdown_gc = 0; 
$wp_super_cache_late_init = 0; //Added by WP-Cache Manager

// uncomment the next line to enable advanced debugging features
$wp_super_cache_advanced_debug = 0;
$wp_super_cache_front_page_text = '';
$wp_super_cache_front_page_clear = 0;
$wp_super_cache_front_page_check = 0;
$wp_super_cache_front_page_notification = '0';

$wp_cache_object_cache = 0; //Added by WP-Cache Manager
$wp_cache_anon_only = 0;
$wp_supercache_cache_list = 0; //Added by WP-Cache Manager
$wp_cache_debug_to_file = 0;
$wp_super_cache_debug = 0;
$wp_cache_debug_level = 5;
$wp_cache_debug_ip = '';
$wp_cache_debug_log = '';
$wp_cache_debug_email = '';
$wp_cache_pages[ "search" ] = 0;
$wp_cache_pages[ "feed" ] = 0;
$wp_cache_pages[ "category" ] = 0;
$wp_cache_pages[ "home" ] = 0;
$wp_cache_pages[ "frontpage" ] = 0;
$wp_cache_pages[ "tag" ] = 0;
$wp_cache_pages[ "archives" ] = 0;
$wp_cache_pages[ "pages" ] = 0;
$wp_cache_pages[ "single" ] = 0;
$wp_cache_pages[ "author" ] = 0;
$wp_cache_hide_donation = 0;
$wp_cache_not_logged_in = 0; //Added by WP-Cache Manager
$wp_cache_clear_on_post_edit = 0; //Added by WP-Cache Manager
$wp_cache_hello_world = 0; //Added by WP-Cache Manager
$wp_cache_mobile_enabled = 0; //Added by WP-Cache Manager
$wp_cache_cron_check = 0;
?>