<?php

/**
 * Plugin Name: IM380 Gutenberg Block Styles
 * Plugin URI: https://github.com/MichaelDayWalks/im380-gutenberg-block-styles/
 * Description: A simple plugin to add a variety of block styles to the standard Gutenberg blocks.
 * Version: 0.1
 * Author: Michael Fairhurst
 */

/**
 * Enqueue Block Styles Javascript
 */
function block_styles_enqueue_javascript() {
	wp_enqueue_script( 'block-styles-script',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks')
	);
}
add_action( 'enqueue_block_editor_assets', 'block_styles_enqueue_javascript' );

/**
 * Enqueue Block Styles Stylesheet
 */
function block_styles_enqueue_stylesheet() {
	wp_enqueue_style( 'block-styles-stylesheet',
		plugins_url( 'style.css', __FILE__ ) 
	);
}
add_action( 'enqueue_block_assets', 'block_styles_enqueue_stylesheet' );
