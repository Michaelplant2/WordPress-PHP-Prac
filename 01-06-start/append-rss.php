<?php
/**
 * Plugin Name:      Append RSS
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Append Message to RSS for members only


function lil_append_rss() {
   if ( is_feed() && in_category( 4, get_the_ID() ) ) {
      $content = '<p>This content is for members only. <a href="#">Join Here</a>.</p>';
   }

   return $content;
}

add_filter('get_the_excerpt','lil_append_rss');
add_filter('the_content','lil_append_rss');