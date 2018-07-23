<?php
/*
Plugin Name:  Custologin
Description:  Simple plugin to customize the Admin login screen and Admin area of Wordpress.
Plugin URI:   https://profiles.wordpress.org/specialk
Author:       Ighodalo Ellis
Author URI:   https://github.com/IghodaloEllis/
Version:      1.0
Text Domain:  custologin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// if admin area
if ( is_admin() ) {
// include plugin dependencies
require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callback.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}

// include plugin dependencies. Admin and Public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';


// default plugin options
function custologin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for Administrators',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}






