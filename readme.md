# Customizer Custom Controls #

**Author:** Cris Rocha 

**Author URI:** https://ocodigocris.com/

**Version:** 1.0

**License:**  GNU General Public License v2 or later 

**License  URI:** http://www.gnu.org/licenses/gpl-2.0.html 

## Description ##

Under development -

## Links ##
[O código Cris ](https://ocodigocris.com)  

# Get Started

1. Weit
1. Wheit
1. Wait


## Custom Controls ##

### Custom Select Radio Control



**Control**


```php

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
        'choices' => array(
            'div1' => esc_html__('Show Div 01?','occ-theme'),
            'div2' => esc_html__('Show Div 02?','occ-theme')           
        )
    ) 
));

```

**Sanitize Callback**

```php

//Sanitize Callback Select Radio
function occ_theme_sanitize_select_radio( $value ){
    
    return ( $value );
}

```

**Create WP_Custom_Control for Select Radio**

```php

class WP_Customize_Select_Radio_Control extends WP_Customize_Control {
        public $type = 'select';
 
        public function render_content() {
        ?>
             <label id="occ_customizer_label"><?php echo esc_html( $this->label ); ?></label>
            <div id="wp_customize_select_radio">
                <?php foreach ( $this->choices as $value => $label ) : ?>
                    <span>
                        <input
                            id="<?php echo esc_attr( 'radio-' . $value ); ?>"
                            type="radio"
                            value="<?php echo esc_attr( $value ); ?>"
                            name="<?php echo esc_attr( $this->id ); ?>"
                            <?php $this->link(); ?>
                            <?php checked( $this->value(), $value ); ?>
                            />
                        <label for="<?php echo esc_attr( 'radio-' . $value ); ?>"><?php echo esc_html( $label ); ?></label>
                    </span>
                <?php endforeach; ?>  
            </div>
        <?php
        }
    }
    
```

Under development -

### Usage ###
 

Under development -

**Example**


Under development 

# occ-wp-customizer-custom-control
