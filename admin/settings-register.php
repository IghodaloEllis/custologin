<?php //Register Settings


// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// register plugin settings
function custologin_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'custologin_options', 
		'custologin_options', 
		'custologin_callback_validate_options' 
	); 
		/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'custologin_section_login', 
		'Customize Login Page', 
		'custologin_callback_section_login', 
		'custologin'
	);
	
	add_settings_section( 
		'custologin_section_admin', 
		'Customize Admin Area', 
		'custologin_callback_section_admin', 
		'custologin'
	);

	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'custom_url',
		'Custom URL',
		'custologin_callback_field_text',
		'custologin',
		'custologin_section_login',
		[ 'id' => 'custom_url', 'label' => 'Custom URL for the login logo link' ]
	);

	add_settings_field(
		'custom_title',
		'Custom Title',
		'custologin_callback_field_text',
		'custologin',
		'custologin_section_login',
		[ 'id' => 'custom_title', 'label' => 'Custom title attribute for the logo link' ]
	);

	add_settings_field(
		'custom_style',
		'Custom Style',
		'custologin_callback_field_radio',
		'custologin',
		'custologin_section_login',
		[ 'id' => 'custom_style', 'label' => 'Custom CSS for the Login screen' ]
	);

	add_settings_field(
		'custom_message',
		'Custom Message',
		'custologin_callback_field_textarea',
		'custologin',
		'custologin_section_login',
		[ 'id' => 'custom_message', 'label' => 'Custom text and/or markup' ]
	);

	add_settings_field(
		'custom_footer',
		'Custom Footer',
		'custologin_callback_field_text',
		'custologin',
		'custologin_section_admin',
		[ 'id' => 'custom_footer', 'label' => 'Custom footer text' ]
	);

	add_settings_field(
		'custom_toolbar',
		'Custom Toolbar',
		'custologin_callback_field_checkbox',
		'custologin',
		'custologin_section_admin',
		[ 'id' => 'custom_toolbar', 'label' => 'Remove Updates, new post and comment links from the Toolbar' ]
	);

	add_settings_field(
		'custom_scheme',
		'Custom Scheme',
		'custologin_callback_field_select',
		'custologin',
		'custologin_section_admin',
		[ 'id' => 'custom_scheme', 'label' => 'Default color scheme for new users' ]
	);



}
add_action( 'admin_init', 'custologin_register_settings' );