<?php
/**
 * Plugin Name:      Change Admin Colors
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Change Admin Colors based On Server


function lil_set_admin_colors() {
   switch ( wp_get_environment_type() ) {
      case 'local': 
         $admin_color = 'sunrise';
         break;
      case 'development':
         $admin_color = 'coffee';
         break;
      case 'staging':
         $admin_color = 'midnight';
         break;
      default:
         $admin_color = 'modern';
   }
   $args = array(
      'ID' => get_current_user_id(),
      'admin_color' => $admin_color,
   );
   wp_update_user( $args );
}

add_action( 'admin_init', 'lil_set_admin_colors');