<?php
/**
 * Template display for featured category style 14
 *
 * @since 1.0
 */
?>

<div class="mag-post-box hentry<?php if ( $m == 1 ): echo ' first-post'; endif; ?>">
	<?php if( $m == 1 ){ ?>
	<div class="magcat-thumb">
		<?php
		/* Display Review Piechart  */
		if( function_exists('penci_display_piechart_review_html') ) {
			$size_pie = 'small';
			if( $m == 1 ): $size_pie = 'normal'; endif;
			penci_display_piechart_review_html( get_the_ID(), $size_pie );
		}
		?>
		<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
		<a class="penci-image-holder penci-lazy<?php if( $m > 1 ): echo ' small-fix-size'; endif; ?><?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } else { ?>
		<a class="penci-image-holder<?php if( $m > 1 ): echo ' small-fix-size'; endif; ?><?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } ?>

		<?php if( has_post_thumbnail() && get_theme_mod('penci_home_featured_cat_icons') ): ?>
			<?php if ( has_post_format( 'video' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-play"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'audio' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-music"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'link' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-link"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'quote' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-quote-left"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'gallery' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-picture-o"></i></a>
			<?php endif; ?>
		<?php endif; ?>

		<div class="magcat-detail">
			<div class="mag-header">
				<h3 class="magcat-titlte entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) || ! get_theme_mod( 'penci_home_featured_cat_date' ) ): ?>
					<div class="grid-post-box-meta mag-meta">
						<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) ) : ?>
							<span class="author-italic author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
						<?php endif; ?>
						<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ) : ?>
							<span><?php penci_soledad_time_link(); ?></span>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
	<?php } else { ?>
		<div class="magcat-detail">
			<div class="magcat-padding">
				<h3 class="magcat-titlte entry-title magcat-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php penci_soledad_meta_schema(); ?>
			</div>
		</div>
	<?php } ?>
</div>