<?php
/**
 * Plugin Name: PHP to JS
 * Description: Proof of Concept: Sending info to Javascript from WordPress
 *
 * @since  0.1
 * @package poc-js
 * Version: 0.1
 * Text Domain: poc
 */

/**
 * Load the assets to be used by this test script.
 *
 * @return void
 */
function load_assets() {
	/** First we are going to create an array to simulate the data
	 * that will be passed to the javascript file
	 */
	$an_array = array(
		'data'         => 'some_data',
		'nested_array' => array(
			'inline_data' => 'some_data_that_is_nested',
		),
	);
	/** First we register the script that will receive our information */
	wp_enqueue_script(
		'poc',
		plugin_dir_url( __FILE__ ) . '/resources/poc.js',
		array( 'jquery' ),
		'1.0',
		false
	);
	/** Now we can define the data that will be passed to the JS file */
	wp_localize_script(
		'poc',
		'js_handle',
		array(
			'hello'       => 'Hello World',
			'passed_data' => $an_array,
			'passed_data_json' => json_encode( $an_array ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'load_assets' );

