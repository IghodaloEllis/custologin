<?php //Admin Menu


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// add top-level administrative menu
function custologin_add_toplevel_menu() {
	
	/* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, 
			string   $menu_slug, 
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null 
		)
	*/
	
	add_menu_page(
		'Custologin Settings',
		'Custologin',
		'manage_options',
		'custologin',
		'custologin_display_settings_page',
		'dashicons-admin-generic',
		30
	);
	
}
add_action( 'admin_menu', 'custologin_add_toplevel_menu' );

