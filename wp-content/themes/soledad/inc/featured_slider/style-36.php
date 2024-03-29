<?php
/**
 * Template part for Slider Style 36
 */

$feat_query = penci_get_query_featured_slider();
if ( ! $feat_query ) {
	return;
}
$slider_title_length = get_theme_mod( 'penci_slider_title_length' ) ? get_theme_mod( 'penci_slider_title_length' ) : 12;
?>
<?php if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post(); ?>
	<div class="item">
		<a class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), 'penci-full-thumb' ); ?>');" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
		<?php if ( ! get_theme_mod( 'penci_featured_center_box' ) ): ?>
			<div class="penci-featured-content-right">
				<div class="feat-text-right">
					<?php if ( ! get_theme_mod( 'penci_featured_hide_categories' ) ): ?>
						<div class="cat featured-cat"><?php penci_category( '' ); ?></div>
					<?php endif; ?>
					<h3><a title="<?php echo wp_strip_all_tags( get_the_title() ); ?>" href="<?php the_permalink() ?>"><?php echo wp_trim_words( wp_strip_all_tags( get_the_title() ), $slider_title_length, '...' ); ?></a></h3>
					<?php if( ( get_the_excerpt() && ! get_theme_mod( 'penci_featured_meta_excerpt' ) ) || ! get_theme_mod( 'penci_featured_meta_comment' ) || ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
					<div class="featured-content-excerpt">
						<?php if ( ! get_theme_mod( 'penci_featured_meta_comment' ) || ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
							<div class="feat-meta">
								<?php if ( ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
									<span class="feat-time"><?php penci_soledad_time_link(); ?></span>
								<?php endif; ?>
								<?php if ( ! get_theme_mod( 'penci_featured_meta_comment' ) ): ?>
									<span class="feat-comments"><a href="<?php comments_link(); ?> "><?php comments_number( '0 ' . penci_get_setting( 'penci_trans_comment' ), '1 '. penci_get_setting( 'penci_trans_comment' ), '% ' . penci_get_setting( 'penci_trans_comments' ) ); ?></a></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php if( get_the_excerpt() && ! get_theme_mod( 'penci_featured_meta_excerpt' ) ): ?>
						<?php the_excerpt(); ?>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<div class="penci-featured-slider-button">
						<a href="<?php the_permalink() ?>"><?php echo penci_get_setting( 'penci_trans_read_more' ); ?></a>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php endwhile; wp_reset_postdata(); endif; ?>
