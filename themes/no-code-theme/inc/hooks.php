<?php
/**
 * Enqueue the block editor assets.
 */

function sole_motivation_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'sole-motivation-block-editor',
		get_theme_file_uri( 'assets/js/block-editor.js' ),
		array( 
			'wp-blocks', 
			'wp-dom-ready', 
			'wp-edit-post' 
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'sole_motivation_enqueue_block_editor_assets' );

function sole_motivation_enqueue_block_assets() {
	wp_enqueue_style(
		'sole-motivation-block-styles',
		get_theme_file_uri( 'assets/css/block-styles.css' )
	);
}
add_action( 'enqueue_block_assets', 'sole_motivation_enqueue_block_assets' );

/**
 * Enqueue frontend form styles
 */
function sole_motivation_enqueue_form_styles() {
	wp_enqueue_style(
		'sole-motivation-form-styles',
		get_theme_file_uri( 'assets/css/form-styles.css' ),
		array(), // Dependencies (none)
		null     // Version (optional — cache busting can go here)
	);
}
add_action( 'wp_enqueue_scripts', 'sole_motivation_enqueue_form_styles' );
