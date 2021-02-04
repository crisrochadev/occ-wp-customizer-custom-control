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

	//Font Awesome Style
	wp_enqueue_style( 'font_awesome', get_template_directory_uri()  . '/css/font-awesome-all.css', '5.15.2' , 'all' );

	//Font Awesome Script
	 wp_enqueue_script('font-awesome_js', get_template_directory_uri() . '/js/font-awesome-all.js', array('jquery'));

	 //Bootstrap Style
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri()  . '/css/bootstrap.css', '5.15.2' , 'all' );

	 //Bootstrap Scripts
	 wp_enqueue_script('bootrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'),true);

}
add_action( 'wp_enqueue_scripts', 'occ_custom_control_register_styles' );