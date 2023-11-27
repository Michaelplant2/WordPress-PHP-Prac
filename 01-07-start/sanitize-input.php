<?php
/**
 * Plugin Name:      Sanitize Input
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Sanitize data for safe storage in database


function lil_sanitized_input() {
	/*** This input would come from forms or fields inside WordPress ***/
	$name = "Michael <Plantamura>";
	$email = "MEPlantamura@<gmail>.com";
	$url = "https://<mplantamura>.com";
	$extra_url = "javascript:alert('Hello')";

	//Sanitize and return here.
	$formate = '<li>%s</li>';
	$output = '<ul>';
	$output .= sprintf( $formate, sanitize_text_field( $name ) );
	$output .= sprintf( $formate, sanitize_email( $email ) );
	$output .= sprintf( $formate, sanitize_url( $url ) );
	$output .= sprintf( $formate, sanitize_url( $extra_url ) );
	$output .= '</ul>'; 
}

function lil_shortcodes_init(){
	add_shortcode('sanitized_input', 'lil_sanitized_input');
}

add_action('init', 'lil_shortcodes_init');