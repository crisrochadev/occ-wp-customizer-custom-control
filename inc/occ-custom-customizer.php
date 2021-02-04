<?php
/**
 * Custom Customizer Controls by O código Cris
 *
 */

if( class_exists( 'WP_Customize_Control' ) ):
/**************************************************************
             CREATE CUSTOM CONTROLS SELECT RADIO
**************************************************************/
    class WP_Customize_Select_Radio_Control extends WP_Customize_Control {
        public $type = 'select';
 
        public function render_content() {
        ?>
        <div class="customizer_control_item">
            <p id="occ_customizer_label"><?php echo esc_html( $this->label ); ?></p>
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
            <p id="occ_customize_select_radio_description"><?php  echo esc_html( $this->description ); ?></p>
        </div>
             
        <?php
        }
    }
/**************************************************************
             CREATE CUSTOM CONTROLS CHECKBOX
**************************************************************/
    class WP_Customize_Checkbox_Control extends WP_Customize_Control {
        public $type = 'checkbox';
        public function render_content() {
        ?>
        
        <div id="occ_customize_checkbox" class="customizer_control_item">
            <p id="occ_customize_checkbox_label"><?php echo esc_html( $this->label ); ?></p>
            <label id="wp_customize_checkbox">
                    <input
                        id="<?php echo esc_attr( $this->id ); ?>"
                        type="checkbox"
                        value="<?php echo esc_attr( $this->id ); ?>"
                        <?php $this->link(); ?>
                        <?php checked( $this->id ); ?>
                    />
                    <span for="<?php echo esc_attr( $this->id ); ?>" id="occ_checkbox_control_span"></span>
            </label>
            <p id="occ_customize_checkbox_description"><?php  echo esc_html( $this->description ); ?></p>
        </div>
            
        <?php
        }
    }
endif;
?>