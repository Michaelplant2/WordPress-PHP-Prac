<?php
/**
 * Plugin Name:      Random Posts
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Randomize Post


function lil_get_random_posts() {
	$args = array(
		'orderby' => 'rand',
		'posts_per_page' => 5,
	);

	return new WP_Query( $args );
 }

function lil_print_random_posts() {
	$query = lil_get_random_posts();

	$posts_list = '<ul>';
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$posts_list .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
 		}
	}
	wp_reset_postdata();
	return $posts_list . '</ul>';
}

function lil_shortcodes_init(){
	add_shortcode('random_posts', 'lil_print_random_posts');
}

add_action('init', 'lil_shortcodes_init');

 