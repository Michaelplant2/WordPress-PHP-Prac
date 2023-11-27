<?php
/**
 * Plugin Name:      Custom Block Patterns
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Create Your Own Block Pattern
// Use jsonformatter.org to copy WP block over


function lil_bp_patterns() {
   $calling_card = '<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"borderColor":"cyan-bluish-gray","backgroundColor":"tertiary","fontSize":"medium"} -->
	<div class="wp-block-columns are-vertically-aligned-center has-border-color has-cyan-bluish-gray-border-color has-tertiary-background-color has-background has-medium-font-size" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":61,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-style-rounded"><img src="/" alt="" class="wp-image-61"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading -->
	<h2 class="wp-block-heading"><strong>Michael Plantamura</strong></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Developer &amp; Air Force Vet<br><a href="https://mplantamura.com">Portfolio</a><br>meplantamura@gmail.com | 848-565-5209</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->';

   register_block_pattern(
      'lil-block-patterns/calling-card',
      array(
         'title'=> __( 'Calling Card','lil-bp' ),
         'description'=> __( 'A simple 2-column contact card','lil-bp'),
         'content'=> $calling_card,
         'categories' => array( 'featured','columns' ),
      )
   );
}

add_action( 'init', 'lil_bp_patterns');