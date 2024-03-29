<?php
/**
 * The color field which uses WordPress color picker to select a color.
 *
 * @package Meta Box
 */

/**
 * Color field class.
 */
class RWMB_Color_Field extends RWMB_Text_Field {
	/**
	 * Enqueue scripts and styles.
	 */
	public static function admin_enqueue_scripts() {
		$args = func_get_args();
		$field = $args[0];
		$js_dependency = array( 'wp-color-picker' );
		wp_enqueue_style( 'rwmb-color', RWMB_CSS_URL . 'color.css', array( 'wp-color-picker' ), RWMB_VER );
		if ( $field['alpha_channel'] ) {
			wp_enqueue_script( 'wp-color-picker-alpha', RWMB_JS_URL . 'wp-color-picker-alpha/wp-color-picker-alpha.min.js', array( 'wp-color-picker' ), RWMB_VER, true );
			$js_dependency = array( 'wp-color-picker-alpha' );
		}
		wp_enqueue_script( 'rwmb-color', RWMB_JS_URL . 'color.js', $js_dependency, RWMB_VER, true );
	}

	/**
	 * Normalize parameters for field.
	 *
	 * @param array $field Field parameters.
	 * @return array
	 */
	public static function normalize( $field ) {
		$field = wp_parse_args( $field, array(
			'alpha_channel' => false,
			'js_options'    => array(),
		) );

		$field['js_options'] = wp_parse_args( $field['js_options'], array(
			'defaultColor' => false,
			'hide'         => true,
			'palettes'     => true,
		) );

		$field = parent::normalize( $field );

		return $field;
	}

	/**
	 * Get the attributes for a field.
	 *
	 * @param array $field Field parameters.
	 * @param mixed $value Meta value.
	 * @return array
	 */
	public static function get_attributes( $field, $value = null ) {
		$attributes = parent::get_attributes( $field, $value );
		$attributes = wp_parse_args( $attributes, array(
			'data-options' => wp_json_encode( $field['js_options'] ),
		) );
		$attributes['type'] = 'text';

		if ( $field['alpha_channel'] ) {
			$attributes['data-alpha'] = 'true';
		}

		return $attributes;
	}

	/**
	 * Format a single value for the helper functions.
	 *
	 * @param array  $field Field parameters.
	 * @param string $value The value.
	 * @return string
	 */
	public static function format_single_value( $field, $value ) {
		return sprintf( "<span style='display:inline-block;width:20px;height:20px;border-radius:50%%;background:%s;'></span>", $value );
	}
}
