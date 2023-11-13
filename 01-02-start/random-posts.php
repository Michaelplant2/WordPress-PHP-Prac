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


function lil_get_random_posts() {

 }

function lil_print_random_posts() {
	$query = lil_get_random_posts();

 }

function lil_shortcodes_init(){
	add_shortcode('random_posts', 'lil_print_random_posts');
}

add_action('init', 'lil_shortcodes_init');

 