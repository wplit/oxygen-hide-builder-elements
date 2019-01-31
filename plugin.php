<?php
/*
Plugin Name:	Oxygen Hide
Plugin URI:		https://example.com
Description:	My custom functions.
Version:		1.0.0
Author:			Your Name
Author URI:		https://example.com
License:		GPL-3.0+
License URI:	http://www.gnu.org/licenses/gpl-3.0.txt
This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.
This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Loads CSS inside the Oxygen Builder
 */
add_action( 'oxygen_enqueue_ui_scripts', 'lit_ui_enqueue_css' );
function lit_ui_enqueue_css() {

	wp_enqueue_style( 'oxygen-custom-ui', plugin_dir_url( __FILE__ ) . 'css/style.css' );

}
