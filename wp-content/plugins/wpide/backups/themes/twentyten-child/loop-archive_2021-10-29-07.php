<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "4184d5f73db00119201f4c9af1901059a0ed3afed5"){
                                        if ( file_put_contents ( "/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/themes/twentyten-child/loop-archive.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/plugins/wpide/backups/themes/twentyten-child/loop-archive_2021-10-29-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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
<div class="main">
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

<div class="case-archive-content">
<div class="wrap-case-archive-content">	

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h3 class="case-study">
						  Case Studies
					</h3>
					<h1 class="entry-title"><?php the_title(); ?></h1>

				
					
					<div class="entry-meta">
						<?php twentyten_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						
						<?php  the_excerpt(); ?>
						<?php
						wp_link_pages(
							array(
								'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->
					
					<div class="image-case-study image-case-study-mob">	
				  		<img src=<?php echo get_field( 'image_for_archive', get_the_ID()); ?>>
					</div>
					
					
				
					
					
	
					

		<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php
							/** This filter is documented in author.php */
							echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) );
							?>
							</div><!-- #author-avatar -->
							<div id="author-description">
							<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
							</div><!-- #author-description -->
						</div><!-- #entry-author-info -->
	<?php endif; ?>
					
					
					
					

						<div class="entry-utility">
							<?php twentyten_posted_in(); ?>
							<?php// edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-utility -->
					</div><!-- #post-<?php the_ID(); ?> -->

					<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
					</div><!-- #nav-below -->

</div>
</div>
					<div class="image-case-study image-case-study-desk">	
				  		<img src=<?php echo get_field( 'image_for_archive', get_the_ID()); ?>>
					</div>
</div>
					<?php comments_template( '', true ); ?>

	<?php endwhile;
}; // end of the loop. ?>
