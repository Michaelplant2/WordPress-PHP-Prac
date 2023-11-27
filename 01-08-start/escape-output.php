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


// Displaying data from a database


function lil_escape_output() {
	/*** This input would come from forms or fields inside WordPress ***/
	$name = "Michael <Plantamura>";
	$email = "MEPlantamura@<gmail>.com";
	$url = "https://<mplantamura>.com";

	$format = '<h3><a href="%1$s">%2$s</a></h3><p>Email: %3$s</p>';


	return sprintf( $format,
		esc_url( $url ),
		esc_html( $name ),
		esc_html( $email ),
	);
}

function lil_shortcodes_init(){
	add_shortcode('escaped_output', 'lil_escape_output');
}

add_action('init', 'lil_shortcodes_init');