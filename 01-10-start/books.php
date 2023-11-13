<?php
/**
 * Plugin Name:      Book Tracker
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

  // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'LILDOMAIN', 'lil-level-up' );
define( 'LILPATH', plugin_dir_path( __FILE__ ) );

 function lil_register_book_type() {

}

add_action( 'init', 'lil_register_book_type' );


