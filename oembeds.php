<?php
/*
Plugin Name: Additional OEmbed Providers
Description: As the name suggests
Version: 0.1
Author: mrjarbenne
Author URI: http://mrjarbenne.ca
License: GPLv2 or later
*/
echo "hello";
add_action( 'init', 'hwdsb_add_tv_hwdsb_oembed_provider' );

/**
 * Adds HWDSB Commons' TV subsite as an oEmbed provider.
 */
function hwdsb_add_tv_hwdsb_oembed_provider() {
	wp_oembed_add_provider( 'https://tv.hwdsb.on.ca/media/*', 'https://tv.hwdsb.on.ca/api2/oembed?', false );
}	
