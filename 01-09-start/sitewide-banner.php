<?php
/**
 * Plugin Name:      Sitewide Banner
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function lil_sitewide_banner() {
	echo '<div class="banner">Join Us for Our Free Webinar!</div>';
}

function lil_banner_styles() {
?>
	<style>
		.banner {
			background: #FF0000;
			color: #FFFFFF;
			font-size: 1.5rem;
			font-weight: bold;
			padding: 15px;
			position: fixed;
  			top: 0;
  			left: 0;
  			right: 0;
			text-align: center;
		}
	</style>
<?
}


