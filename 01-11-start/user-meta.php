<?php
/**
 * Plugin Name:      Last Logged-In
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Store login times for user


 function lil_last_logged_in( $user_login, $user ) {
	$meta_key = 'lil_last_logged_in';
 }
 
 // Replace the Hook with the Appropriate One
 add_action( 'admin_init', 'lil_last_logged_in');

 function lil_show_last_login( $user_id = false ) {
	$user_id = ( ! $user_id ) ? get_current_user_id() : $user_id;
	return '<p>' .  get_user_meta( $user_id, 'lil_last_logged_in', true ) . '</p>';
}

 function lil_shortcodes_init(){
	add_shortcode('show_last_login', 'lil_show_last_login');
}

add_action( 'init', 'lil_shortcodes_init' );