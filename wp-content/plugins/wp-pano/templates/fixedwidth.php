<?php $id = get_the_ID();?>
<div id="wppano_post_wrapper_fit" style="width: 640px;" >
	<div id="wppano_post_title"><h1><?php the_title();?></h1></div>
	<div id="wppano_post_content_fit" style="max-height: 100%;">
		<?php the_content(); ?>
	</div>
	<div class="wp-pano-close-icon" onclick="wppano_close_post();"></div>
	<script>
		jQuery('#wppano_post_content_fit').ready(function() {
			var container = jQuery('#wppano_overlay');
			var wrapper = jQuery('#wppano_post_wrapper_fit');
			var img = jQuery("#wppano_overlay img");
			var counter = 0;
			if (img.length) 
				img.on("load", function() {
					counter++;
					if ((counter == img.length)) {
						if (container.height() < wrapper.height()) {
							wrapper.css({display: 'block', height: '100%'});
							jQuery('#wppano_post_content_fit').css({overflow: 'auto'});
						}
					}
				});
		});

	</script>	
</div>
<?php wp_die();?>