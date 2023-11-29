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


// When user logs in they get greeted by first name or user name

 function lil_login_redirect() {
	return trailingslashit( home_url() ) . 'logged_in';
 }
 
 // Replace the **Hook** with the Appropriate One
 add_filter( 'login_redirect', 'lil_login_redirect');

 function lil_show_username() {
	$name = 'There';

	if ( is_user_logged_in() ) {
		$user = get_userdata( get_current_user_id() );
		$name = $user->display_name;
	}
	return '<h2>Hello, ' . $name . '</h2>';
}

 function lil_shortcodes_init(){
	add_shortcode('greet_user', 'lil_show_username');
}

add_action( 'init', 'lil_shortcodes_init' );