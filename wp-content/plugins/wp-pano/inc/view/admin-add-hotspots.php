<?php
if (!function_exists('add_action')) die('Access denied');

add_action("admin_init", "wppano_AddMetabox");

function wppano_AddMetabox() {
	$posttypes = get_option('wppano_posttype');
	if( $posttypes['type'] ) 
		foreach ( $posttypes['type'] as $posttype )
			add_meta_box('customMeta', 'WP Pano', 'wppano_Meta_Add_New_hotspot', $posttype, 'normal', 'high');
}

function wppano_Meta_Add_New_hotspot() {
	global $post;
	$post_id = $post->ID;
	if ( function_exists ('pll_get_post') && $pll_post_id = pll_get_post( $post->ID , pll_default_language()) ) $post_id = $pll_post_id;
	$hotspots = wppano_get_hotspots_by_post_id($post_id);
	$vtourpath =  '/' . get_option('wppano_vtourpath') . '/';
	$js_url = $vtourpath.get_option('wppano_vtourjs');
	$xml_url = $vtourpath.get_option('wppano_vtourxml');
	$swf_url = $vtourpath.get_option('wppano_vtourswf');
	
	$post_types = get_option('wppano_posttype');
	$hs_styles = $post_types['hs_style'];
	$hs_style = $hs_styles[get_post_type($post_id)];

	if ( is_file(get_home_path() . $js_url) && is_file(get_home_path() . $xml_url) && is_file(get_home_path() . $swf_url)) 
		require_once('admin-renderpano.php');
		else
		require_once('admin-rendererror.php');
} ?>