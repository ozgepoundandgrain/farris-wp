<?php

namespace App;


function init_acf_options() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Theme Settings',
      'menu_title' 	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-settings'
    ));
  
  }
}
add_action('acf/init', __NAMESPACE__ . '\\init_acf_options');

function add_page_excerpt() {
  add_post_type_support( 'page', 'excerpt' );
}
add_action('init', __NAMESPACE__ . '\\add_page_excerpt');