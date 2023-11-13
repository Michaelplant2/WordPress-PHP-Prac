<?php
/**
 * Plugin Name:      Show Custom Meta
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


function lil_set_custom_meta() {
	$meta_key = 'greeting';
	$meta_value = '"Hello There!"';
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		'order' => 'DESC',
		'orderby' => 'date'
	);
	
	$query = new WP_Query( $args );
	
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			update_post_meta( get_the_ID(), $meta_key, $meta_value );
		}
	}
	
	wp_reset_postdata();
}

function lil_get_custom_meta() {

}

 function lil_shortcodes_init(){
	add_shortcode('show_greeting', 'lil_get_custom_meta');
}

add_action( 'init', 'lil_set_custom_meta' );
add_action( 'init', 'lil_shortcodes_init' );