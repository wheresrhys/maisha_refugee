<?php
/**
 * The template used for displaying page content
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>

<div class="aboutpage">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ): ?>
		<div class="cd-fixed-bg-one cd-bg-1 rhys-banner">
		<div class="entry-content rhys-banner-content">
			<h1><?php the_title(); ?></h1>
			<hr class="short">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'maisha' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'maisha' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div>
		<?php $image_id = get_post_thumbnail_id(); ?>
		<?php echo wp_get_attachment_image($image_id, 'full'); ?>
		</div>
		<?php else: ?>
		<div class="cd-fixed-bg-one withoutimg">
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
			<hr class="short">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'maisha' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'maisha' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div>
		</div>
		<?php endif; ?>
	</article><!-- #post-## -->
</div><!-- .aboutpage -->