<?php
/**
 * Plugin Name:      Greet User
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function lil_login_redirect() {
	
 }
 
 // Replace the **Hook** with the Appropriate One
 add_action( 'admin_init', 'lil_login_redirect');

 function lil_show_username() {

	return '';
}

 function lil_shortcodes_init(){
	add_shortcode('greet_user', 'lil_show_username');
}

add_action( 'init', 'lil_shortcodes_init' );