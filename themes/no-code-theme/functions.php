<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package advanced-theme
 * @since 1.0.0
 */

// Filters.
require_once get_theme_file_path( 'inc/hooks.php' );

// Enqueue Google Fonts (Montserrat)
function solemotivation_enqueue_styles() {
    // Load Montserrat font
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'solemotivation_enqueue_styles');

