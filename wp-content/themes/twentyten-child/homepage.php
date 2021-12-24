<?php
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
