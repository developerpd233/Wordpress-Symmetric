<?php
/**
 * Template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php echo do_shortcode('[elementor-template id="1658"]'); ?>

		<div  id="container">
		    
		    <div class="siderbar-heading">
		        OUR PROCESS
		    </div>
		
			<div class="container"  id="content" role="main">
			
<?php
	/*
	 * Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
if ( have_posts() ) {
	the_post();
}
?>

			

<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/*
	 * Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	get_template_part( 'loop', 'archive' );
?>

	</div><!-- #content -->
		
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
