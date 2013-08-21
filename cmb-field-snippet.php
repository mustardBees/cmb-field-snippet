<?php
/*
Plugin Name: CMB Field Type: Snippet
Plugin URI: https://github.com/mustardBees/cmb-field-snippet
Description: Display code snippets such as shortcodes for easy copy/paste. A field type for Custom Metaboxes and Fields for WordPress.
Version: 1.0
Author: Phil Wylie
Author URI: http://www.philwylie.co.uk/
License: GPLv2+
*/

/**
 * Render field
 */
function pw_snippet_field( $field, $meta ) {
	echo '<input type="text" name="pw_snippet" id="' . $field['id'] . '" value="' . esc_attr( $field['snippet'] ) . '" style="width:97%" onclick="this.select();" readonly />';

	if ( ! empty( $field['desc'] ) ) echo '<p class="cmb_metabox_description">' . $field['desc'] . '</p>';
}
add_filter( 'cmb_render_pw_snippet', 'pw_snippet_field', 10, 2 );