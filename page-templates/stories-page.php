<?php
/**
 * Template Name: Stories Page
 *
 * @package Maisha
 * @since Maisha 1.0
 * Amended Chris Pink
 */

get_header(); ?>
	<?php if(get_theme_mod('maisha_stories_layout') == 'top-header-two') : ?>
    <!-- layout:top-header-two -->
	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'grid-page' );

	// End the loop.
	endwhile;
	?>
	<div class="child-pages columns clear">

		<?php
			$child_pages = new WP_Query( array(
				'post_type'      => 'page',
				//'orderby'        => 'menu_order',
				//'order'          => 'ASC',
				'post_parent'    => $post->ID,
				'posts_per_page' => 999,
				'no_found_rows'  => true,
			) );
			while ( $child_pages->have_posts() ) : $child_pages->the_post();
				 get_template_part( 'content', 'grid-projects-one' );
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<!-- .child-pages -->
	<?php elseif(get_theme_mod('maisha_stories_layout') == 'no-header-two') : ?>
        <!-- layout:no-header-two -->

	<div class="child-pages columns clear">
		<?php
			$child_pages = new WP_Query( array(
				'post_type'      => 'page',
				//'orderby'        => 'menu_order',
				//'order'          => 'ASC',
				'post_parent'    => $post->ID,
				'posts_per_page' => 999,
				'no_found_rows'  => true,
			) );
			while ( $child_pages->have_posts() ) : $child_pages->the_post();
				 get_template_part( 'content', 'grid-projects-one' );
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<!-- .child-pages -->
	<?php else: ?>
        <!-- layout:all others -->

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'grid-page' );

	// End the loop.
	endwhile;
	?>

	<div class="child-pages columns clear">

		<?php
			$child_pages = new WP_Query( array(
				'post_type'      => 'page',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'post_parent'    => $post->ID,
				'posts_per_page' => 999,
				'no_found_rows'  => true,
			) );
			while ( $child_pages->have_posts() ) : $child_pages->the_post();
				 get_template_part( 'content', 'grid-projects-one' );
			endwhile;
			wp_reset_postdata();
		?>
	</div>

	<!-- .child-pages -->
	<?php endif; ?>
<?php get_footer(); ?>