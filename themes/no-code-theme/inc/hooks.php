<?php
/**
 * Enqueue the block editor assets.
 */

function sole_motivation_block_editor_assets() {
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

add_action( 'enqueue_block_editor_assets', 'sole_motivation_block_editor_assets' );

function sole_motivation_block__assets() {
	wp_enqueue_script(
		'sole-motivation-block-styles',
		get_theme_file_uri( 'assets/css/block-styles.js' ),
	);
}
add_action( 'enqueue_block_assets', 'sole_motivation_block_assets' );