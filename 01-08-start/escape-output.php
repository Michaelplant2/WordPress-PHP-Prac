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

function lil_escape_output() {
	/*** This input would come from forms or fields inside WordPress ***/
	$name = "Jack <> Coder";
	$email = "jack~!coder@<coder>.tld";
	$url = "https://<coder>.tld";

	return $output;
}

function lil_shortcodes_init(){
	add_shortcode('escaped_output', 'lil_escape_output');
}

add_action('init', 'lil_shortcodes_init');