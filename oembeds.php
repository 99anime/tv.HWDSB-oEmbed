<?php
/*
Plugin Name: Additional OEmbed Providers
Description: As the name suggests
Version: 0.1
Author: mrjarbenne
Author URI: http://mrjarbenne.ca
License: GPLv2 or later
*/

add_action( 'init', 'add_oembed_tvhwdsb' );

function add_oembed_tvhwdsb() {
wp_oembed_add_provider( 'https://tv.hwdsb.on.ca/id.*', 'https://tv.hwdsb.on.ca/oembed', true );
}	
