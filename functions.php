<?php

function add_theme_scripts() {

// ENQUEUE STYLES
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'google-fonts', "//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic", array(), '1.0', 'all');
 
  wp_enqueue_style( 'fancy-box', get_template_directory_uri() . '/css/fancybox.css', array(), '1.0', 'all');

// ENQUEUE SCRIPTS
  
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing-1.3.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'gmap', get_template_directory_uri() . '/js/jquery.gmap.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'jcarousel', get_template_directory_uri() . '/js/jquery.jcarousel.min.js', array ( 'jquery' ), 1.0, true);
  
  wp_enqueue_script( 'smartStartSlider', get_template_directory_uri() . '/js/jquery.smartStartSlider.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array ( 'jquery' ), 1.0, true);

  wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array (), 1.0, true);

  wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array (), 1.0, true);

  wp_enqueue_script( 'selectivizr', get_template_directory_uri() . '/js/selectivizr-and-extra-selectors.min.js', array (), 1.0, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// REGISTER MENUS

function register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_menus' );

  add_theme_support('post-thumbnails', array ('post','projects'));

  // Register Custom Post Type for Projects
function cpt_projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Projects', 'text_domain' ),
		'archives'              => __( 'Project Archives', 'text_domain' ),
		'attributes'            => __( 'Project Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'view_items'            => __( 'View Projects', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Projects', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
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
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'cpt_projects', 0 );

// Register Custom Post Type for Teams
function cpt_teams() {

	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Teams', 'text_domain' ),
		'name_admin_bar'        => __( 'Teams', 'text_domain' ),
		'archives'              => __( 'Team Archives', 'text_domain' ),
		'attributes'            => __( 'Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Team:', 'text_domain' ),
		'all_items'             => __( 'All Teams', 'text_domain' ),
		'add_new_item'          => __( 'Add New Team', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Team', 'text_domain' ),
		'edit_item'             => __( 'Edit Team', 'text_domain' ),
		'update_item'           => __( 'Update Team', 'text_domain' ),
		'view_item'             => __( 'View Team', 'text_domain' ),
		'view_items'            => __( 'View Teams', 'text_domain' ),
		'search_items'          => __( 'Search Team', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into team', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'text_domain' ),
		'description'           => __( 'Teams', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
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
	);
	register_post_type( 'teams', $args );

}
add_action( 'init', 'cpt_teams', 0 );

add_action( 'after_setup_theme', 'smartstart_theme_setup' );
function smartstart_theme_setup() {
  add_image_size( 'project-size', 940, 380 );
  add_image_size( 'single-project', 680, 600);
  add_image_size( 'blog-post', 680, 235);
  add_image_size( 'portfolio-project', 300, 190);
  add_image_size( 'latest-project', 220, 140);
  add_image_size( 'team-member', 220,  245);
  add_image_size( 'blog-post-front', 220, 75);
}

