<?php
/**
 * The loop that displays a single post
 *
 * The loop displays the posts and the post content. See
 * https://codex.wordpress.org/The_Loop to understand it and
 * https://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();
		?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					
					
					
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
						wp_link_pages(
							array(
								'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

		
						
					</div><!-- #post-<?php the_ID(); ?> -->

					
					<?php// comments_template( '', true ); ?>

	<?php endwhile;
}; // end of the loop. ?>
