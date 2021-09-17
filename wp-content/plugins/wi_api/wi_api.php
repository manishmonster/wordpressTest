<?php
/**
 * Plugin Name: REST API plugin
 * Description: REST API plugin
 * Version: 1.0
 * Author: Manish 
 */

function wi_api_call(){
	global $wpdb; 
	$table_name = $wpdb->prefix . 'collection';
	$result = $wpdb->get_results ( "SELECT * FROM $table_name LIMIT 1 ");
}

add_action('rest_api_init',function(){
	register_rest_route('w1/v1','collections',[
		'methods' => 'GET',
		'callback' => 'wi_api_call',
	]);
	
})
?>