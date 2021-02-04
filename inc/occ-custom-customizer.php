<?php
/**
 * Custom Customizer Controls by O código Cris
 *
 */

/**************************************************************
            CREATE CUSTOM CONTROLS SELECT RADIO
**************************************************************/
if( class_exists( 'WP_Customize_Control' ) ):
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
endif;
?>