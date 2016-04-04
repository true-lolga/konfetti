<?php 
if (!function_exists('add_action')) die('Access denied');

add_shortcode('wp-pano', 'wppano_krpano_block');
function wppano_krpano_block($attr) {
	$height = "";
	$width  = "";
	$html5  = "prefer";
	$vars   = "";
	$wmode  = "";
	$passQueryParameters = "false";
	if ( isset($attr['passqueryparameters']) ) $passQueryParameters = $attr['passqueryparameters'];	
	if ( isset($attr['height']) ) $height 	= "height: " . $attr['height'] . ";";
	if ( isset($attr['width']) ) $width = "width: " . $attr['width'] . ";";
	if ( isset($attr['html5']) ) $html5 = $attr['html5'];
	if ( isset($attr['wmode']) ) $wmode = "wmode:'" . $attr['wmode'] . "', ";
	if ( isset($attr['vars']) ) $vars = ',' . $attr['vars'];
	
	
	if ( isset($attr['swf']) ) $swf_url = $attr['swf'];
	if ( isset($attr['xml']) ) $xml_url = $attr['xml'];
	if ( isset($attr['js']) ) $js_url = $attr['js'];

	$target_container = '';
	$vtourpath = "";
	
	if ( get_option('wppano_vtourpath') ) $vtourpath = '/' . get_option('wppano_vtourpath') . '/';
	if ( get_option('wppano_vtourjs') ) $js_url = $vtourpath . get_option('wppano_vtourjs');
	if ( get_option('wppano_vtourxml') ) $xml_url = $vtourpath . get_option('wppano_vtourxml');
	if ( get_option('wppano_vtourswf') ) $swf_url = $vtourpath . get_option('wppano_vtourswf');
	if ( get_option('wppano_target_container') ) $target_container = get_option('wppano_target_container');
	?>
	
	<script src="<?php echo $js_url;?>"></script>
	<script src="<?php echo WPPANO_PATH;?>/js/wheelzoom.js"></script>
	<script src="<?php echo WPPANO_PATH;?>/js/responsiveslides.min.js"></script>

	
	<div id="pano" style="<?php echo $width . $height;?>">				
		<noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
		<script>
			embedpano({swf:"<?php echo $swf_url; ?>", xml:"<?php echo $xml_url; ?>", target:"pano", html5:"<?php echo $html5; ?>", 
						vars:{"cms.vtourpath":"<?php echo $vtourpath; ?>" <?php echo $vars; ?>}, <?php echo $wmode; ?>
						passQueryParameters:<?php echo $passQueryParameters; ?>, id:"krpanoObject", onready:krpano_ready,
						basepath:"<?php echo $vtourpath; ?>", initvars:{WPPANOPATH:"/<?php echo addslashes(substr(WPPANO_BASEDIR, strlen(ABSPATH)));?>"}});
			var krpano = document.getElementById("krpanoObject");
		</script>
	</div>
	
	<input type="hidden" id="target_container" value="<?php echo $target_container; ?>">
	<input type="hidden" id="vtourpath" value="<?php echo $vtourpath; ?>">
	
	<?php return false;
	wp_die();
} 
?>