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
        'settings' => 'occ_custom_select_radio_control',
        'description' => 'Do you want to display this element?',
        'choices' => array(
            'div1' => esc_html__('Show Div 01?','occ-theme'),
            'div2' => esc_html__('Show Div 02?','occ-theme')           
        )
    ) 
));

/* --------------------------------------------------
                CHECKBOX ON|OFF
----------------------------------------------------*/

$wp_customize->add_setting( 'occ_custom_checkbox_control',
    array(
        'transport' => 'refresh',
        'sanitize_callback' => 'occ_theme_sanitize_checkbox'
    )
);
$wp_customize->add_control( new WP_Customize_Checkbox_Control( 
    $wp_customize, 
    'occ_custom_checkbox_control', 
    array(
        'label' => __( 'Hidden or show Element', 'occ-theme' ),
        'section' => 'occ_custom_section',
        'settings' => 'occ_custom_checkbox_control',
        'type' => 'checkbox',
        'description' => 'Do you want to display this element?',
    ) 
));





/************* Sanitize Callback ******************/

//Sanitize Callback Select Radio
function occ_theme_sanitize_select_radio( $value ){
    //returns true if checkbox is checked
    return ( $value );
}

//checkbox sanitization function
function occ_theme_sanitize_checkbox( $input ){
      
    //returns true if checkbox is checked
    return ( ( isset( $input ) && true == $input ) ? true : false );
}


/************* End Sanitize Callback ***************/
}
add_action( 'customize_register', 'occ_theme_customizer' );

?>