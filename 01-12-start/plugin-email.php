<?php
/**
 * Plugin Name:      Active Plugin Alert
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Notify email when user activates a plugin


 function lil_send_email($plugin, $network_activation) {
   $admin_email = get_option('admin_email');

   $plugin = explode('/', $plugin);
   $subject = 'New Active Plugin';
   $message = 'Hello! This is to let you know the plugin, ' . $plugin[0] . ', has been activated.';
   $headers = 'From: WordPress Admin <meplantamura@gmail.com>';

   wp_mail( $admin_email, $subject, $message, $headers ) or die('The email was not sent.');
   return true;
 }
 
 // Replace the Hook with the Appropriate One
 add_action( 'activated_plugin', 'lil_send_email', 10, 2 );