<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "4184d5f73db00119201f4c9af1901059adcb0de55c"){
                                        if ( file_put_contents ( "/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/themes/twentyten-child/single-portfolio.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/plugins/wpide/backups/themes/twentyten-child/single-portfolio_2021-10-22-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();




?>




		<div id="container">
			<div id="content" role="main">

			<?php
			/*
			 * Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
             
             
			get_template_part( 'loop', 'single-portfolio' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>