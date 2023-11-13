<?php
/**
 * Plugin Name:      Create Transient
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function lil_save_display_name(  $user_login, $user ) {

 }

 add_action( 'wp_login', 'lil_save_display_name', 10, 2 );

 function lil_show_transient() {

	return '';
}

 function lil_shortcodes_init(){
	add_shortcode('show_transient', 'lil_show_transient');
}

add_action( 'init', 'lil_shortcodes_init' );