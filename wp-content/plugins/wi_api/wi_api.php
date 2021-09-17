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
	$data  = [];
	foreach($result as $dataOutput){
		$data[0]['id'] = $dataOutput->id;
		$data[0]['lab_database_id'] = $dataOutput->lab_database_id;
		$data[0]['name'] = $dataOutput->name;
		$data[0]['slug'] = $dataOutput->slug;
		$data[0]['address'] = $dataOutput->address;
		$data[0]['street'] = $dataOutput->street;
		$data[0]['city'] = $dataOutput->city;
		$data[0]['region'] = $dataOutput->region;
		$data[0]['post_code'] = $dataOutput->post_code;
		$data[0]['opening_hours'] = explode("_SP_", $dataOutput->opening_hours);
		$data[0]['extra_info']= $dataOutput->extra_info;
		$data[0]['phone_number']= $dataOutput->phone_number;
		$data[0]['location']= array('latitude'=>$dataOutput->latitude,'longitude'=> $dataOutput->longitude);
		$data[0]['location_type'] = $dataOutput->location_type;
		$data[0]['fax_number']= $dataOutput->fax_number;
		$data[0]['services']= $dataOutput->services;
		$data[0]['payment_facilities']= $dataOutput->payment_facilities;
		$data[0]['test_type']= explode("_SP_", $dataOutput->test_type) ;
		$data[0]['accessibility']= explode("_SP_", $dataOutput->accessibility) ;
		$data[0]['email_address']= $dataOutput->email_address;
	}

	return $data;

}

add_action('rest_api_init',function(){
	register_rest_route('w1/v1','collections',[
		'methods' => 'GET',
		'callback' => 'wi_api_call',
	]);
	
})
?>