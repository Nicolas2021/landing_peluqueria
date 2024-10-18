<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package beautystyle
 */

/*
 If the current post is protected by a password and
 the visitor has not yet entered the password,
 return early without loading the comments. */
 
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="post-comment">

	<?php if ( have_comments() ) : ?>
		<h4 id="comments"><?php comments_number( esc_html__( 'No Responses', 'beautystyle' ), esc_html__( '1 Response', 'beautystyle' ), esc_html__( '% Responses', 'beautystyle') ); ?></h4>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'short_ping'  => true,
				'avatar_size' => 34,
                'type' => 'comment'
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<nav class="navigation comment-navigation" role="navigation">
				
				<h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'beautystyle' ); ?></h1>

				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'beautystyle' ) ); ?></div>

				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'beautystyle' ) ); ?></div>

			</nav><!-- .comment-navigation -->

		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'beautystyle' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->