<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "4184d5f73db00119201f4c9af1901059b3b1bdd54a"){
                                        if ( file_put_contents ( "/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/themes/twentyten-child/homepage.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/plugins/wpide/backups/themes/twentyten-child/homepage_2021-10-05-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Home page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="fullcase">
		    
		    <div class="caseloop">
		        <?php $index_query = new WP_Query(array( 'post_type' => 'case', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
                <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
    		    
    		        <div class="data">
    		            <h1><?php the_title(); ?></h1>
    		            <span><?php the_content(); ?></span>
    		        </div>
    		        
    		    <?php endwhile; wp_reset_postdata(); ?>
		    </div>
		    
		</div>

<?php get_footer(); ?>
