<?php
/*
Plugin Name: Limit Text Length
Plugin URI:  http://conditionalcheckoutfields.com
Description: This plugin will limit the text length of a specific text box.
Version:     1.0
Author:      Scott DeLuzio
Author URI:  http://scottdeluzio.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function limit_text_length_script() {
	wp_enqueue_script( 'limit-text', plugins_url( '/limit.js' , __FILE__ ), array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'limit_text_length_script' );

function limit_text_length_show_countdown( $repeat, $field_id ){
	switch ( $field_id ) {
		case '8':
		/* This would be the countdown that would show up for field #8
		 * Add case 'XX': etc. under case '8': above to add additional fields.
		 * Replace '8' with actual field IDs.
		 */
		echo '<div class="field-8-countdown"></div>';
		break;

		default:
		/* You can add a default message here, or leave blank if you only want
		 * this to display for a handful of fields.
		 */
		break;
	}
}
add_action( 'cwcfp_before_checkout_fields_grouping', 'limit_text_length_show_countdown', 10, 2 );