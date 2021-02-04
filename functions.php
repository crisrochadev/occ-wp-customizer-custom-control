<?php

/**
 * 
 *
 * @package OCC Customizer Custom Control
 */

/****************** Get Custom-customizer.php********************/

require_once('inc/occ-custom-customizer.php');

/****************** Get Customizer.php***************************/

require_once('inc/occ-customizer.php');

/****************** Custom Controls Customizer *******************/

function occ_customizer_styles(){
	wp_enqueue_style( 'occ-customizer-css', get_stylesheet_directory_uri() . '/css/custom-customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'occ_customizer_styles' );

/**************** End Custom Controls Customizer ******************/



function occ_custom_control_register_styles(){

	//Enqueue Styles
	wp_enqueue_style( 'occ_custom_control_style', get_template_directory_uri() . '/style.css', array(), get_template_directory_uri() . '/style.css', 'all' );

}
add_action( 'wp_enqueue_scripts', 'occ_custom_control_register_styles' );