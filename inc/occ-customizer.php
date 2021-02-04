<?php
/**
 * Customizer Setup and Custom Controls by O código Cris
 *
 */
/**************************************************************
           				OCC CUSTOM CONTROLS
**************************************************************/


function occ_theme_customizer( $wp_customize ) {

// *************** Settings panel for occ custom Controls

$wp_customize->add_panel('occ_custom_panel',array(
    'title'=>'Custom Panel',
    'priority'=> 10,
));

// *************** Settings section for occ custom Controls
$wp_customize->add_section('occ_custom_section',array(
    'title'=>'Custom Section',
    'priority'=>10,
    'panel'=>'occ_custom_panel',
));

/* --------------------------------------------------
				SELECT RADIO CONTROL
----------------------------------------------------*/
$wp_customize->add_setting( 'occ_custom_select_radio_control',
    array(
        'default' => 'div1',
        'transport' => 'refresh',
        'sanitize_callback' => 'occ_theme_sanitize_select_radio'
    )
);
$wp_customize->add_control( new WP_Customize_Select_Radio_Control( 
    $wp_customize, 
    'occ_custom_select_radio_control', 
    array(
        'label' => __( 'Select Show Div1 or Div2', 'occ-theme' ),
        'section' => 'occ_custom_section',
        'settings' => 'occ_custom_control',
        'choices' => array(
            'div1' => esc_html__('Show Div 01?','occ-theme'),
            'div2' => esc_html__('Show Div 02?','occ-theme'),
            'div3' => esc_html__('Show Div 03?','occ-theme'),
            'div4' => esc_html__('Show Div 04?','occ-theme'),
            'div5' => esc_html__('Show Div 05?','occ-theme'),
            'div6' => esc_html__('Show Div 06?','occ-theme'),            
        )
    ) 
));





/************* Sanitize Callback ******************/

//checkbox sanitization function
function occ_theme_sanitize_select_radio( $value ){
    //returns true if checkbox is checked
    return ( $value );
}

/************* End Sanitize Callback ***************/
}
add_action( 'customize_register', 'occ_theme_customizer' );

?>