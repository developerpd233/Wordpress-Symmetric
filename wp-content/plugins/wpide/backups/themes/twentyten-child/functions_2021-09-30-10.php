<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "4184d5f73db00119201f4c9af19010596225269f0a"){
                                        if ( file_put_contents ( "/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/themes/twentyten-child/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/pearpixels/public_html/dmh-dev.com/symmetric/wp-content/plugins/wpide/backups/themes/twentyten-child/functions_2021-09-30-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function customwidget() {
		register_sidebar( array(
		'name' => __( 'Site Logo', 'twentyten' ),
		'id' => 'site',
		'description' => __( 'The Site Logo widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => __( 'Top Social Icon', 'twentyten' ),
		'id' => 'social',
		'description' => __( 'The social widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		register_sidebar( array(
		'name' => __( 'Banner Content', 'twentyten' ),
		'id' => 'baner',
		'description' => __( 'The banner content widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'customwidget' );

function blog( $atts ){
  global $post;
$temp_post=$post;
$args = array( 'post_type' => 'post', 'posts_per_page' => 4);
$output .='<ul>';  
$outputposts = get_posts( $args );
foreach($outputposts as $post) : setup_postdata($post);
 $output .= '<li><a href="'.get_the_permalink().'">';
   $output .='<div class="zoom">'. get_the_post_thumbnail( $post->ID, 'full' ).'</div>';
   $output .= '<h3>'.get_the_title().'</h3>';
  $output .= '</a></li>';
endforeach;
$output .= '</ul>';
$post=$temp_post;
return $output;
}
add_shortcode( 'blog', 'blog' );
add_filter('use_block_editor_for_post', '__return_false', 10);



function cw_case() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Case', 'plural'),
'singular_name' => _x('Case', 'singular'),
'menu_name' => _x('Case', 'admin menu'),
'name_admin_bar' => _x('Case', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Case'),
'new_item' => __('New Case'),
'edit_item' => __('Edit Case'),
'view_item' => __('View Case'),
'all_items' => __('All Case'),
'search_items' => __('Search Case'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'case'),
'has_archive' => true,
'hierarchical' => false,
'taxonomies' => array( 'category' ),
);
register_post_type('Case', $args);

}
add_action('init', 'cw_case');



function cw_team() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Team', 'plural'),
'singular_name' => _x('Team', 'singular'),
'menu_name' => _x('Team', 'admin menu'),
'name_admin_bar' => _x('Team', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Team'),
'new_item' => __('New Team'),
'edit_item' => __('Edit Team'),
'view_item' => __('View Team'),
'all_items' => __('All Team'),
'search_items' => __('Search Team'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'team'),
'has_archive' => true,
'hierarchical' => false,
'taxonomies' => array( 'category' ),
);
register_post_type('Team', $args);

}
add_action('init', 'cw_team');