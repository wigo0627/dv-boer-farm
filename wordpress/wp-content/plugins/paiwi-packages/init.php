<?php
/*
Plugin Name: Paiwi Packages Plugin
Description: Plugin for Paiwi Packages
Version: 1
Author: sinetiks.com
Author URI: http://sinetiks.com
*/
// function to create the DB / Options / Defaults					
function ss_options_install() {

    global $wpdb;

    $table_name = $wpdb->prefix . "paiwi_package";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`title` varchar(255) NOT NULL,
			`project_return` varchar(255) NOT NULL,
			`duration` varchar(255) NOT NULL,
			`heads` varchar(255) NOT NULL,
			`insurance` varchar(255) NOT NULL,
			`kid` varchar(255) NOT NULL,
			`cost` varchar(255) NOT NULL,
			PRIMARY KEY (`id`)
		) $charset_collate;  ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
}

// run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'ss_options_install');

//menu items
add_action('admin_menu','farm_paiwi_package_modifymenu');
function farm_paiwi_package_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('Paiwi Packages', //page title
	'Paiwi Packages', //menu title
	'manage_options', //capabilities
	'farm_paiwi_package_list', //menu slug
	'farm_paiwi_package_list' //function
	);
	
	//this is a submenu
	add_submenu_page('farm_paiwi_package_list', //parent slug
	'Add New Paiwi Packages', //page title
	'Add New', //menu title
	'manage_options', //capability
	'farm_paiwi_package_create', //menu slug
	'farm_paiwi_package_create'); //function
	
	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update Paiwi Packages', //page title
	'Update', //menu title
	'manage_options', //capability
	'farm_paiwi_package_update', //menu slug
	'farm_paiwi_package_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'paiwi-package-list.php');
require_once(ROOTDIR . 'paiwi-package-create.php');
require_once(ROOTDIR . 'paiwi-package-update.php');
