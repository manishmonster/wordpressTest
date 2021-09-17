<?php
/**
 * Plugin Name: CustomeTable
 * Description: The custome table plugin
 * Version: 1.0
 * Author: Manish 
 */
global $custom_table_version;
$custom_table_version = '1.0';

function custom_table_install() {
	global $wpdb;
	global $custom_table_version;

	$table_name = $wpdb->prefix . 'collection';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`lab_database_id` varchar(5) DEFAULT '' NULL,
		`name` varchar(150) DEFAULT '' NOT NULL,
		`slug` varchar(150) DEFAULT '' NOT NULL,
		`address` varchar(150) DEFAULT '' NOT NULL,
		`street` varchar(150) DEFAULT '' NOT NULL,
		`city` varchar(150) DEFAULT '' NOT NULL,
		`region` varchar(150) DEFAULT '' NOT NULL,
		`post_code` varchar(15) DEFAULT '' NULL,
		`latitude` varchar(150) DEFAULT '' NULL,
		`longitude` varchar(150) DEFAULT '' NULL,
		`extra_info` TEXT,
		`phone_number` varchar(20) NOT NULL,
		`location_type` varchar(15) DEFAULT '' NULL,
		`fax_number` varchar(15) DEFAULT '' NULL,
		`services` varchar(15) DEFAULT '' NULL,
		`payment_facilities` varchar(15) DEFAULT '' NULL,
		`test_type` text,
		`email_address` varchar(150) DEFAULT '' NOT NULL,
		`accessibility` text,
		`opening_hours` text,
		PRIMARY KEY  (id)
	)";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	add_option( 'custom_table_version', $custom_table_version );
}


function custom_table_install_data() {
	global $wpdb;
	
	$table_name = $wpdb->prefix . 'collection';
	
	$wpdb->insert( $table_name, 
		array( 
			'name'=>'Meadowbank Collection Centre',
			'slug'=>'meadowbank-collection-centre',
			'address'=>'Shop 24, Meadowbank Shopping Centre',
			'street'=>'35 Saint Johns Road',
			'city'=>'Saint Johns',
			'region'=>'Auckland',
			'post_code'=>'1072',
			'phone_number'=>'09-574 7399',
			'services'=>'Standard Tests',
			'latitude'=>'-36.875784046670375',
			'longitude'=>'174.82775155517945',
			'opening_hours'=>'ALERT LEVEL 4: Collection Centre is closed during level 4 lockdown. _SP_ Weekdays; 07:00 \u2013 16:00 _SP_ ',
			'test_type'=>'Standard Phlebotomy _SP_ Fertility Testing","Illumiscreen\/NIPT _SP_ Sexual Health Testing',
			'accessibility'=>'Standard Wheelchair Access _SP_ Hearing Impairment _SP_ Translation'
		) 
	);
}

function activate(){
	custom_table_install();
	custom_table_install_data();
}
register_activation_hook( __FILE__,  'activate' );
?>