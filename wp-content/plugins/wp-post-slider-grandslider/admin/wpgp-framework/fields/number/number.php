<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: number
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'WPGP_Field_number' ) ) {
  class WPGP_Field_number extends WPGP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'unit' => '',
      ) );

      echo $this->field_before();
      echo '<div class="wpgp--wrap">';
      echo '<input type="number" name="'. $this->field_name() .'" value="'. $this->value .'"'. $this->field_attributes( array( 'class' => 'wpgp-input-number' ) ) .'/>';
      echo ( ! empty( $args['unit'] ) ) ? '<span class="wpgp--unit">'. $args['unit'] .'</span>' : '';
      echo '</div>';
      echo '<div class="clear"></div>';
      echo $this->field_after();

    }

    public function output() {

      $output    = '';
      $elements  = ( is_array( $this->field['output'] ) ) ? $this->field['output'] : array_filter( (array) $this->field['output'] );
      $important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
      $mode      = ( ! empty( $this->field['output_mode'] ) ) ? $this->field['output_mode'] : 'width';
      $unit      = ( ! empty( $this->field['unit'] ) ) ? $this->field['unit'] : 'px';

      if( ! empty( $elements ) && isset( $this->value ) && $this->value !== '' ) {
        foreach( $elements as $key_property => $element ) {
          if( is_numeric( $key_property ) ) {
            if( $mode ) {
              $output = implode( ',', $elements ) .'{'. $mode .':'. $this->value . $unit . $important .';}';
            }
            break;
          } else {
            $output .= $element .'{'. $key_property .':'. $this->value . $unit . $important .'}';
          }
        }
      }

      $this->parent->output_css .= $output;

      return $output;

    }

  }
}
