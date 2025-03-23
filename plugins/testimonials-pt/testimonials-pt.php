/*
 * Plugin Name: Testimonials Post Type
 */

add_action( 'init', 'testimonials-pt' );

function testimonials-pt() {

    $labels = array(

        'name'                     => __( 'Announcements', 'sole-motivation' ),
        'singular_name'            => __( 'Announcement', 'sole-motivation' ),
        'add_new'                  => __( 'Add New', 'sole-motivation' ),
        'add_new_item'             => __( 'Add New Announcement', 'sole-motivation' ),
        'edit_item'                => __( 'Edit Announcement', 'sole-motivation' ),
        'new_item'                 => __( 'New Announcement', 'sole-motivation' ),
        'view_item'                => __( 'View Announcement', 'sole-motivation' ),
        'view_items'               => __( 'View Announcements', 'sole-motivation' ),
        'search_items'             => __( 'Search Announcements', 'sole-motivation' ),
        'not_found'                => __( 'No Announcements found.', 'sole-motivation' ),
        'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'sole-motivation' ),
        'parent_item_colon'        => __( 'Parent Announcements:', 'sole-motivation' ),
        'all_items'                => __( 'All Announcements', 'sole-motivation' ),
        'archives'                 => __( 'Announcement Archives', 'sole-motivation' ),
        'attributes'               => __( 'Announcement Attributes', 'sole-motivation' ),
        'insert_into_item'         => __( 'Insert into Announcement', 'sole-motivation' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'sole-motivation' ),
        'featured_image'           => __( 'Featured Image', 'sole-motivation' ),
        'set_featured_image'       => __( 'Set featured image', 'sole-motivation' ),
        'remove_featured_image'    => __( 'Remove featured image', 'sole-motivation' ),
        'use_featured_image'       => __( 'Use as featured image', 'sole-motivation' ),
        'menu_name'                => __( 'Announcements', 'sole-motivation' ),
        'filter_items_list'        => __( 'Filter Announcement list', 'sole-motivation' ),
        'filter_by_date'           => __( 'Filter by date', 'sole-motivation' ),
        'items_list_navigation'    => __( 'Announcements list navigation', 'sole-motivation' ),
        'items_list'               => __( 'Announcements list', 'sole-motivation' ),
        'item_published'           => __( 'Announcement published.', 'sole-motivation' ),
        'item_published_privately' => __( 'Announcement published privately.', 'sole-motivation' ),
        'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'sole-motivation' ),
        'item_scheduled'           => __( 'Announcement scheduled.', 'sole-motivation' ),
        'item_updated'             => __( 'Announcement updated.', 'sole-motivation' ),
        'item_link'                => __( 'Announcement Link', 'sole-motivation' ),
        'item_link_description'    => __( 'A link to an announcement.', 'sole-motivation' ),

    );

    $args = array(

        'labels'                => $labels,
        'description'           => __( 'organize and manage company announcements', 'sole-motivation' ),
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-megaphone',
        'capability_type'       => 'post',
        'capabilities'          => array(),
        'supports'              => array( 'title', 'editor', 'revisions' ),
        'taxonomies'            => array(),
        'has_archive'           => false,
        'rewrite'               => array( 'slug' => 'testimonials' ),
        'query_var'             => true,
        'can_export'            => true,
        'delete_with_user'      => false,
        'template'              => array(),
        'template_lock'         => false,

    );

    register_post_type( 'testimonials_announcement_cpt', $args );

}