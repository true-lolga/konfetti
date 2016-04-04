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


		    </article>

	    <?php endwhile; // end of the loop. ?>

	</div><!-- #services -->
</div><!-- #primary -->



<?php get_footer(); ?>