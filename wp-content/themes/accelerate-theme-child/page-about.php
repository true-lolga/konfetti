<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
			   $service_1 = get_field('service_1');
			   $service_2 = get_field('service_2');
			   $service_3 = get_field('service_3');
			   $service_4 = get_field('service_4');
			   $service_5 = get_field('service_5');
			   $tour = get_field ('tour');
			    $size = "full";
			     ?>
			     
			     <article class="about">
			        <aside class="about-sidebar">
				        <?php the_content(); ?>
				    </aside>

				    <div class="about-services">
                        <?php if($service_1) { ?>
                            <?php echo $service_1; ?>
                        <?php } ?>
                        <?php if($service_2) { ?>
                            <?php echo $service_2; ?>
                        <?php } ?>
                        <?php if($service_3) { ?>
                            <?php echo $service_3; ?>
                        <?php } ?>
                        <?php if($service_4) { ?>
                            <?php echo $service_4; ?>
                        <?php } ?>
                        <?php if($service_5) { ?>
                            <?php echo $service_5; ?>
                        <?php } ?>
                    </div>

				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>