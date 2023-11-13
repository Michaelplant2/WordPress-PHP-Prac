<?php
/**
 * Plugin Name:      Simple Membership
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function lil_check_membership( $content ) {

    return $content;
}


add_filter( 'the_content', 'lil_check_membership' );

function lil_check_url( $url ) {

	return;
}
