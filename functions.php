<?php
//theme support
function add_theme_supports(){
  add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'add_theme_supports' );
function enqueue_scripts(){
  wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap',array(),false,'all');
  wp_enqueue_style('frank-collins-design-style',get_stylesheet_directory_uri().'/style.css',array(),'1.0.0','all');
  if ( ! wp_script_is( 'jquery', 'enqueued' )) {
      wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.1.min.js',array(),false,false);
  }
  wp_enqueue_script('fcd',get_stylesheet_directory_uri().'/assets/fcd.js',array(),false,true);
}
add_action('wp_enqueue_scripts','enqueue_scripts');

function portfolio_cpt() {
  $labels = array(
    'name'               => 'Portfolio',
    'singular_name'      => 'Portfolio Piece',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Portfolio Piece',
    'edit_item'          => 'Edit Portfolio Piece',
    'new_item'           => 'New Portfolio Piece',
    'all_items'          => 'All Porfolio Pieces',
    'view_item'          => 'View Porfolio Pieces',
    'search_items'       => 'Search Porfolio Pieces',
    'not_found'          => 'No Portfolio Pieces Found',
    'not_found_in_trash' => 'No Portfolio Pieces Found in Trash',
    'parent_item_colon'  => '’',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Portfolio Pieces for Frank Collins Designs',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'taxonomies'  => array( 'category' ),
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_cpt' );
