<?php


// Register Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Custom type post
function create_post_type() {
  register_post_type( 'experts',
    array(
      'labels' => array(
        'name' => __( 'Experts' ),
        'singular_name' => __( 'Experts' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );





?>