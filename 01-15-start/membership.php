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


// show content only if user is member


 function lil_check_membership( $content ) {
    $restricted = '<h3>Restricted</h3> <p>This content is for members only!</p>';

    if ( ! lil_check_url() ) {
        return $restricted;
    }

    if ( ! lil_id_checker( $_GET['id'] ) ) {
        return $restricted;
    }

    return $content;
}


add_filter( 'the_content', 'lil_check_membership' );

function lil_check_url( $query_var = 'id' ) {
	return isset( $_GET[$query_var] );
}

function lil_id_checker( $id ) {
    $ids = [ 34, 56, 76, 13, 45, 92 ];
    return in_array( $id, $ids );
}