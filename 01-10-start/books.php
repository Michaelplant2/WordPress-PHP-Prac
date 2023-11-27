<?php
/**
 * Plugin Name:      Book Tracker
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// displaying books read but not as blog posts


  // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'LILDOMAIN', 'lil-level-up' );
define( 'LILPATH', plugin_dir_path( __FILE__ ) );

 function lil_register_book_type() {
  $labels = array(
    'name'=> __('Books', LILDOMAIN),
    'singular_name'=> __('Book', LILDOMAIN ),
    'archives'=> __('Library', LILDOMAIN ),
  );

  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'has_archive'=> 'books',
    'rewrite'=> array('has_front'=> true),
    'menu_icon'=> 'dashicons-book',
    'supports'=> array(
      'title',
      'editor',
      'thumbnail',
    ),
    'show_in_rest'=> true,
  );

  register_post_type('book', $args );
}

add_action( 'init', 'lil_register_book_type' );


