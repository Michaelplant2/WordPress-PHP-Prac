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


// store data so we don't have to keep retrieving 
//  it to save on performance. 


 function lil_save_display_name(  $user_login, $user ) {
	set_transient( 'lil_display_name', $user->display_name, (HOUR_IN_SECONDS*24*30 ) );
 }

 add_action( 'wp_login', 'lil_save_display_name', 10, 2 );

 function lil_delete_display_name() {
	delete_transient( 'lil_display_name' );
 }

 add_action( 'wp_logout', 'lil_delete_display_name' );

 function lil_show_transient() {
	$display_name = ( ! empty( get_transient( 'lil_display_name' ) ) ) ? get_transient( 'lil_display_name' ) :
	'There';

	return '<h2>Hello, '. $display_name . '</h2>';
}

 function lil_shortcodes_init(){
	add_shortcode('show_transient', 'lil_show_transient');
}

add_action( 'init', 'lil_shortcodes_init' );