<?php
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


function cw_portfolio() {
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
'name' => _x('Portfolio', 'plural'),
'singular_name' => _x('Portfolio', 'singular'),
'menu_name' => _x('Portfolio', 'admin menu'),
'name_admin_bar' => _x('Portfolio', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Portfolio'),
'new_item' => __('New Portfolio'),
'edit_item' => __('Edit Portfolio'),
'view_item' => __('View Portfolio'),
'all_items' => __('All Portfolio'),
'search_items' => __('Search Portfolio'),
'not_found' => __('No Portfolio found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'portfolio'),
'has_archive' => true,
'hierarchical' => false,
'taxonomies' => array( 'category' ),
);
register_post_type('Portfolio', $args);

}
add_action('init', 'cw_portfolio');









//add_post_type_support( 'post', 'excerpt');






//SMWH work


if ( ! function_exists('customCarousel_post_type') ) {

// Register Custom Post Type
function customCarousel_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonial', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'customCarousel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'CustomCarousel', 'text_domain' ),
		'name_admin_bar'        => __( 'CustomCarousel', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'customCarousel', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		
		
		
		
		
	);
	register_post_type( 'customCarousel', $args );

}
add_action( 'init', 'customCarousel_post_type', 0 );

}









function testicode2($atts) {

 


global $post;
//foreach ( get_categories() as $category ) :
 //echo '<br>'.$category->name;

//echo $atts['my_catagory'];
if($atts1 == true){
$the_catagory =  $atts['my_catagory'];
}
$arr = array();
	$showInMenu = get_posts(array(
		'post_type' => 'customCarousel', 
		'numberposts' => 5,  
		'post_status' => 'publish',
		'category' => $the_catagory
	));
		//echo"<pre>";print_r($showInMenu);echo"</pre>";
		
	$options = '';
	echo '<div class="container-fluid testi-show"><div class="col-md-12"><div class="gallery"><div class="gallery-container">';
	foreach ($showInMenu as $showPage) {

	
		echo'<div class="slide-section"> <div>';
		
		echo'<div class="review-title">'.$showPage -> post_title.'</div>'; 
		echo'<div class="designation">'. $showPage -> post_excerpt.'</div>';
		 echo'<div class="custom-review">'.$showPage -> post_content.'</div>';
		
		echo'</div> </div>';
		
		
		
		
		
		
       
	} 
    echo '</div><div class="gallery-controls"></div></div></div></div>';
     
  
//endforeach;


}


// Add a shortcode
add_shortcode('mycustomCarousel', 'testicode2');
 





 


 
function my_scripts() {
	
	
	

	
	
//  wp_register_script ( 'query12', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), 6.3 , 'true'  );
//  wp_enqueue_script ( 'query12', 50 );	
	
	
 wp_register_script ( 'carousel', get_bloginfo('url') . '/wp-content/themes/twentyten-child/slider/slick.js', array(), 6.2 , 'true'  );
 wp_enqueue_script ( 'carousel', 50 );

wp_register_script ( 'carousel-setting', get_bloginfo('url') . '/wp-content/themes/twentyten-child/slider/carousel-setting.js', array(), 6.2 , 'true'  );
 wp_enqueue_script ( 'carousel-setting', 55 );
	
	
	
}
add_action( 'wp_enqueue_scripts', 'my_scripts', 100, 1);



















