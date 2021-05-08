<?php 
/**
 * Plugin Name: Rest Countries Custom Plugin
 * Plugin URL:
 * Description: Countries plugin
 * Version: 0.1
 * Author: Ben Clauser
 * Author URL: 
 **/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/rest-country-scripts.php');
//load class
require_once(plugin_dir_path(__FILE__) . '/includes/rest-countries-class.php');

//register widget 
function register_rest_countries() {
    register_widget('Rest_Countries_Widget');
}

//Hook in function
add_action('widgets_init', 'register_rest_countries');