<?php
/*
	Plugin Name: planview blog custom fields
	Description: custom fields plugin
	Author: planview
	Version: 0.0.0
	Author URI: https://github.com/Planview/
	Text Domain: pv-custom-fields
	Domain Path: /lang
 */

if (!defined('WPINC')) {
    die;
}

define( 'ACF_LITE', true );

include_once(dirname(__FILE__) . '/vendor/advanced-custom-fields/acf.php');



function pvcf_load_fields($file_name){
	include_once(dirname(__FILE__) . '/fields/' . $file_name . '.php');
}


pvcf_load_fields( 'subtitle' );
pvcf_load_fields( 'credits-handles' );
pvcf_load_fields( 'categories' );