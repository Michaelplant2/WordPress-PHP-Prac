<?php
/**
 * Plugin Name:      Copyright Line
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Dynamic Copyright Year


 function lil_copyright_line() {
	return '&copy; 2020 - ' . date('Y');
 }



function lil_shortcodes_init(){
	add_shortcode('copyright', 'lil_copyright_line');
}

add_action('init', 'lil_shortcodes_init');