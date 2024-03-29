<?php
/**
 * Set some values default when theme is activated
 *
 * @param string $name
 *
 * @return string / true / false
 */
if ( ! function_exists( 'penci_default_setting_customizer' ) ) {
	function penci_default_setting_customizer( $name ) {
		$defaults = array(

			// Options
			'penci_sidebar_home'             => true,
			'penci_sidebar_posts'            => true,
			'penci_sidebar_archive'          => true,
			'penci_facebook'                 => 'https://www.facebook.com/PenciDesign',
			'penci_twitter'                  => 'https://twitter.com/PenciDesign',

			// Transition text
			'penci_top_bar_custom_text'      => esc_html__( 'Top Posts', 'soledad' ),
			'penci_header_slogan_text'       => esc_html__( 'keep your memories alive', 'soledad' ),
			'penci_trans_comment'            => esc_html__( 'comment', 'soledad' ),
			'penci_trans_save_fields'        => esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'soledad' ),
			'penci_trans_type_and_hit'       => esc_html__( 'Type and hit enter...', 'soledad' ),
			'penci_trans_comments'           => esc_html__( 'comments', 'soledad' ),
			'penci_trans_reply_comment'           => esc_html__( 'Reply', 'soledad' ),
			'penci_trans_edit_comment'           => esc_html__( 'Edit', 'soledad' ),
			'penci_trans_wait_approval_comment'           => esc_html__( 'Your comment awaiting approval', 'soledad' ),
			'penci_trans_by'                 => esc_html__( 'by', 'soledad' ),
			'penci_trans_text_views'         => esc_html__( 'views', 'soledad' ),
			'penci_trans_home'               => esc_html__( 'Home', 'soledad' ),
			'penci_home_popular_title'       => esc_html__( 'Popular Posts', 'soledad' ),
			'penci_home_title'               => '',
			'penci_trans_newer_posts'        => esc_html__( 'Newer Posts', 'soledad' ),
			'penci_trans_older_posts'        => esc_html__( 'Older Posts', 'soledad' ),
			'penci_trans_load_more_posts'    => esc_html__( 'Load More Posts', 'soledad' ),
			'penci_trans_no_more_posts'      => esc_html__( 'Sorry, No more posts', 'soledad' ),
			'penci_trans_all'                => esc_html__( 'All', 'soledad' ),
			'penci_trans_back_to_top'        => esc_html__( 'Back To Top', 'soledad' ),
			'penci_trans_written_by'         => esc_html__( 'written by', 'soledad' ),
			'penci_trans_previous_post'      => esc_html__( 'previous post', 'soledad' ),
			'penci_trans_next_post'          => esc_html__( 'next post', 'soledad' ),
			'penci_post_related_text'        => esc_html__( 'You may also like', 'soledad' ),
			'penci_rltpopup_heading_text'    => esc_html__( 'Read also', 'soledad' ),
			'penci_trans_name'               => esc_html__( 'Name*', 'soledad' ),
			'penci_trans_email'              => esc_html__( 'Email*', 'soledad' ),
			'penci_trans_website'            => esc_html__( 'Website', 'soledad' ),
			'penci_trans_your_comment'       => esc_html__( 'Your Comment', 'soledad' ),
			'penci_trans_leave_a_comment'    => esc_html__( 'Leave a Comment', 'soledad' ),
			'penci_trans_cancel_reply'       => esc_html__( 'Cancel Reply', 'soledad' ),
			'penci_trans_submit'             => esc_html__( 'Submit', 'soledad' ),
			'penci_trans_category'           => esc_html__( 'Category:', 'soledad' ),
			'penci_trans_continue_reading'   => esc_html__( 'Continue Reading', 'soledad' ),
			'penci_trans_read_more'          => esc_html__( 'Read more', 'soledad' ),
			'penci_trans_view_all'           => esc_html__( 'View All', 'soledad' ),
			'penci_trans_tag'                => esc_html__( 'Tag:', 'soledad' ),
			'penci_trans_tags'               => esc_html__( 'Tags', 'soledad' ),
			'penci_trans_posts_tagged'       => esc_html__( 'Posts tagged with', 'soledad' ),
			'penci_trans_author'             => esc_html__( 'Author', 'soledad' ),
			'penci_trans_daily_archives'     => esc_html__( 'Daily Archives', 'soledad' ),
			'penci_trans_monthly_archives'   => esc_html__( 'Monthly Archives', 'soledad' ),
			'penci_trans_yearly_archives'    => esc_html__( 'Yearly Archives', 'soledad' ),
			'penci_trans_archives'           => esc_html__( 'Archives', 'soledad' ),
			'penci_trans_search'             => esc_html__( 'Search', 'soledad' ),
			'penci_trans_search_results_for' => esc_html__( 'Search results for', 'soledad' ),
			'penci_trans_share'              => esc_html__( 'Share', 'soledad' ),
			'penci_trans_comments_closed'    => esc_html__( 'Comments are closed.', 'soledad' ),
			'penci_trans_search_not_found'   => esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'soledad' ),
			'penci_trans_back_to_homepage'   => esc_html__( 'Back to Home Page', 'soledad' ),
			'penci_not_found_sub_heading'    => esc_html__( "OOPS! Page you're looking for doesn't exist. Please use search for help", "soledad" ),
			'penci_footer_copyright'         => '@2019 - All Right Reserved. Designed and Developed by <a rel="nofollow" href="http://themeforest.net/item/soledad-multiconcept-blogmagazine-wp-theme/12945398?ref=PenciDesign" target="_blank">PenciDesign</a>',
			'penci_bg_color_dark'            => '#ffffff',
			'penci_text_color_dark'          => '#afafaf',
			'penci_border_color_dark'        => '#DEDEDE',
			'penci_meta_color_dark'          => '#949494',
			'penci_gprd_desc'        => esc_html__( "This website uses cookies to improve your experience. We'll assume you're ok with this, but you can opt-out if you wish.", 'soledad' ),
			'penci_gprd_rmore'       => esc_html__( "Read More", 'soledad' ),
			'penci_gprd_btn_accept'  => esc_html__( "Accept", 'soledad' ),
			'penci_gprd_policy_text' => esc_html__( "Privacy & Cookies Policy", 'soledad' ),
			'penci_gprd_rmore_link'  => '#',

			'penci__hide_share_linkedin'    => 1,
			'penci__hide_share_tumblr'      => 1,
			'penci__hide_share_reddit'      => 1,
			'penci__hide_share_stumbleupon' => 1,
			'penci__hide_share_whatsapp'    => 1,
			'penci__hide_share_telegram'    => 1,
			'penci__hide_share_stumbleupon' => 1,
			'penci__hide_share_whatsapp'    => 1,
			'penci__hide_share_stumbleupon' => 1,
			'penci__hide_share_whatsapp'    => 1,
			'penci__hide_share_email'       => 1,
		);

		return isset( $defaults[ $name ] ) ? $defaults[ $name ] : '';
	}
}

/**
 * Get theme settings.
 *
 * @param string $name
 * @since 4.0
 */
if ( ! function_exists( 'penci_get_setting' ) ) {
	function penci_get_setting( $name ) {
		return do_shortcode( get_theme_mod( $name, penci_default_setting_customizer( $name ) ) );
	}
}