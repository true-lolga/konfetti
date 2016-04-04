<?php $id = get_the_ID();?>
<div id="wppano_post_wrapper_fit">
	<div id="wppano_post_title"><h1><?php the_title();?></h1></div>
	<div id="wppano_post_content_fit">
		<?php if ( get_post_gallery() ) : ?> 
			<ul class="slider" style="margin: 0; padding: 0; overflow: hidden;" >
			<?php $galleries = get_post_galleries( get_the_ID(), false );			
			foreach( $galleries as $gallery ) :
				foreach( $gallery['src'] as $src ) : ?>
					<li style="display: block; ">
						<img src="<?php echo $src; ?>" class="wp-pano-img">
					</li>				
				<?php endforeach; ?>
			<?php endforeach; ?>
			</ul>
        <?php endif; ?>
	</div>
	<div class="wp-pano-close-icon" onclick="wppano_close_post();"></div>
</div>

	<script>
		jQuery('img').load(function() {
			var _this = jQuery(this);
			var container = jQuery('#wppano_overlay');
			var css;				
			var ratio=_this.width() / _this.height();
			var pratio=container.width() / container.height();
			if ( ratio < pratio ) 
				if( _this.height() > container.height()-200 )
					css={height: container.height()-200, width: 'auto'};
				else
					css={height: _this.height(), width: 'auto'};	
			_this.css(css);
		});
		jQuery(".slider").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "slider"
		});
	</script>
<?php wp_die();?>