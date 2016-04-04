<?php
/*
Plugin Name: wp-pano
Plugin URI: wp-pano.com
Description:  The content manager for the krpano Panorama Viewer
Author: Alexey Yuzhakov
Version: 1.05 beta
Author URI: https://www.facebook.com/a.m.yuzhakov
*/

if (!function_exists('add_action')) die('Access denied');

define('WPPANO_VERSION', '1.0 beta');
define('WPPANO_MIN_WP_VERSION', '3.5');
//define('SITE_HOMEPATH', get_home_path());
define('WPPANO_BASEFOLDER', '/' . dirname( plugin_basename(__FILE__)));		//	/wp-pano
define('WPPANO_PATH', WP_PLUGIN_URL . WPPANO_BASEFOLDER);		//	http://wp-pano.com/wp-content/plugins/wp-pano
define('WPPANO_BASEFILE', __FILE__);	//   /var/www/wp-pano.com/wp-content/plugins/wp-pano/wp-pano.php
define('WPPANO_BASEDIR', __DIR__);		//   /var/www/wp-pano.com/wp-content/plugins/wp-pano

include_once('inc/db.php');
include_once('inc/front.php');
if( is_admin() ) include_once('inc/admin.php');

add_action( 'wp_enqueue_scripts', 'wppano_scripts_method' );  //frontend scripts
function wppano_scripts_method() {
	wp_enqueue_style( 'dashicons' );
    wp_register_style( 'wppano_style', WPPANO_PATH . '/style.css' );
    wp_enqueue_style( 'wppano_style' );
	wp_register_script( "wppano_front_script", WPPANO_PATH . '/js/front.js', array('jquery') );
	wp_localize_script( 'wppano_front_script', 'ajax', 
		array( 
			'url' => admin_url( 'admin-ajax.php' ), 
			'nonce' => wp_create_nonce('wppano-nonce')
		)
	);	
	wp_enqueue_script('wppano_front_script');	
}

add_action( 'admin_enqueue_scripts', 'wppano_admin_scripts_method' );  //admin scripts
function wppano_admin_scripts_method() {
    wp_register_style( 'wppano_prefix_style', WPPANO_PATH.'/style-admin.css' );
    wp_enqueue_style( 'wppano_prefix_style' );	
	wp_register_script( "wppano_front_script", WPPANO_PATH.'/js/front.js', array('jquery') );
	wp_localize_script( 'wppano_front_script', 'ajax', 
		array( 
			'url' => admin_url( 'admin-ajax.php' ), 
			'nonce' => wp_create_nonce('wppano-nonce')
		)
	);	
	wp_enqueue_script('wppano_front_script');	
} 

?>