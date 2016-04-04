<?php $id = get_the_ID();?>
<div id="wppano_post_wrapper_fit" >
	<div id="wppano_post_title"><h1><?php the_title();?></h1></div>
	<div id="wppano_post_content_fit" style="max-height: 100%">
		<?php the_content(); ?>
	</div>
	<div class="wp-pano-close-icon" onclick="wppano_close_post();"></div>
	<script>
		var load = false;
		jQuery('#wppano_post_content_fit').ready(function() {
			var container = jQuery('#wppano_overlay');
			var wrapper = jQuery('#wppano_post_wrapper_fit');
			if ( container.height() < wrapper.height() ) {
				wrapper.css({display: 'block', width: '600px', height: '100%'});
				jQuery('#wppano_post_content_fit').css({overflow: 'auto'});
			};
		});
	</script>	
</div>
<?php wp_die();?>