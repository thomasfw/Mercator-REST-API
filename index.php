<?php
/*
Plugin Name: Mercator REST API
Plugin URI: https://github.com/humanmade/Mercator-REST-API
Description: REST API for working with domain mappings
Version: 
Author: Human Made
Author URI: https://hmn.md
Text Domain: 
Domain Path: 
*/

add_action( 'rest_api_init', 'mercator_api_init' );

function mercator_api_init()
{
	require_once dirname(__FILE__) . '/class-rest-api.php';
	$ctrlr = new Mercator\REST_API();
	$ctrlr->register_routes();
}
