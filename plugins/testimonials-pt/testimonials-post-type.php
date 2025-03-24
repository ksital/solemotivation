<?php
/*
 * Plugin Name: Testimonials
 * Description: A custom post type for testimonials.
 * Version: 1.0
 * Author: Your Name
 */

add_action( 'init', 'testimonials_pt' );

function testimonials_pt() {

    $labels = array(
        'name'                     => __( 'Testimonials', 'sole-motivation' ),
        'singular_name'            => __( 'Testimonial', 'sole-motivation' ),
        'add_new'                  => __( 'Add New', 'sole-motivation' ),
        'add_new_item'             => __( 'Add New Testimonial', 'sole-motivation' ),
        'edit_item'                => __( 'Edit Testimonial', 'sole-motivation' ),
        'new_item'                 => __( 'New Testimonial', 'sole-motivation' ),
        'view_item'                => __( 'View Testimonial', 'sole-motivation' ),
        'view_items'               => __( 'View Testimonials', 'sole-motivation' ),
        'search_items'             => __( 'Search Testimonials', 'sole-motivation' ),
        'not_found'                => __( 'No testimonials found.', 'sole-motivation' ),
        'not_found_in_trash'       => __( 'No testimonials found in Trash.', 'sole-motivation' ),
        'all_items'                => __( 'All Testimonials', 'sole-motivation' ),
        'archives'                 => __( 'Testimonial Archives', 'sole-motivation' ),
        'attributes'               => __( 'Testimonial Attributes', 'sole-motivation' ),
        'insert_into_item'         => __( 'Insert into testimonial', 'sole-motivation' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this testimonial', 'sole-motivation' ),
        'featured_image'           => __( 'Featured Image', 'sole-motivation' ),
        'set_featured_image'       => __( 'Set featured image', 'sole-motivation' ),
        'remove_featured_image'    => __( 'Remove featured image', 'sole-motivation' ),
        'use_featured_image'       => __( 'Use as featured image', 'sole-motivation' ),
        'menu_name'                => __( 'Testimonials', 'sole-motivation' ),
        'filter_items_list'        => __( 'Filter testimonials list', 'sole-motivation' ),
        'items_list_navigation'    => __( 'Testimonials list navigation', 'sole-motivation' ),
        'items_list'               => __( 'Testimonials list', 'sole-motivation' ),
        'item_published'           => __( 'Testimonial published.', 'sole-motivation' ),
        'item_updated'             => __( 'Testimonial updated.', 'sole-motivation' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'rewrite'            => array( 'slug' => 'testimonials' ),
    );

    register_post_type( 'testimonial', $args );
}
