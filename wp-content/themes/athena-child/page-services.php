<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
get_header(); ?>

<div id="primary" class="site-content">
		<div id="services" role="main">
			<?php while ( have_posts() ) : the_post();
			   $title_1 = get_field('title_1');
			   $prices_1 = get_field('prices_1');
			   $description_1 = get_field('description_1');
			   $title_2 = get_field('title_2');
			   $description_2 = get_field('description_2');
			   $title_3 = get_field ('title_3');
			   $package_1 = get_field ('package_1');
			   $pck_dsc_1 = get_field ('pck_dsc_1');
			   $package_2 = get_field ('package_2');
			   $pck_dsc_2 = get_field ('pck_dsc_2');
			   $package_3 = get_field ('package_3');
			   $pck_dsc_3 = get_field ('pck_dsc_3');
			   $package_4 = get_field ('package_4');
			   $pck_dsc_4 = get_field ('pck_dsc_4');
			   $note = get_field ('note');
			    $size = "full";
			     ?>

            <article class="services">
			    <aside class="about-services">
				    <?php the_content(); ?>
				</aside>


                <div class="prices">
                    <div class="rent">
                        <h2><?php echo $title_1; ?></h2>
                        <?php echo wp_get_attachment_image( $prices_1, $size ); ?>
                        <p><?php echo $description_1; ?></p>
                    </div>

                    <div class="add-costs">
                        <h2><?php echo $title_2; ?></h2>
                        <p><?php echo $description_2; ?></p>
                    </div>

                    <div class="packages">
                        <h2><?php echo $title_3; ?></h2>

                        <aside class="pack-1">
                            <h4><?php echo $package_1; ?></h4>
                            <p><?php echo $pck_dsc_1; ?></p>
                        </aside>

                        <aside class="pack-2">
                            <h4><?php echo $package_2; ?></h4>
                            <p><?php echo $pck_dsc_2; ?></p>
                        </aside>

                         <aside class="pack-3">
                            <h4><?php echo $package_3; ?></h4>
                            <p><?php echo $pck_dsc_3; ?></p>
                        </aside>

                        <aside class="pack-4">
                            <h4><?php echo $package_4; ?></h4>
                            <p><?php echo $pck_dsc_4; ?></p>
                        </aside>
                    </div>
                        
                </div>

		    </article>

	    <?php endwhile; // end of the loop. ?>

	</div><!-- #services -->
</div><!-- #primary -->



<?php get_footer(); ?>