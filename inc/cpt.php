<?php
/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

add_action('init', 'mapi_create_post_type'); // Add our mind Blank Custom Post Type
function mapi_create_post_type(){
  register_post_type('documents', // Register Custom Post Type
      array(
          'labels' => array(
              'name' => __('Documents', 'mindblank'), // Rename these to suit
              'singular_name' => __('Document', 'mindblank'),
              'add_new' => __('Add New Document', 'mindblank'),
              'add_new_item' => __('Add New Document', 'mindblank'),
              'edit' => __('Edit Document', 'mindblank'),
              'edit_item' => __('Edit Document', 'mindblank'),
              'new_item' => __('New Document', 'mindblank'),
              'view' => __('View Document', 'mindblank'),
              'view_item' => __('View Document', 'mindblank'),
              'search_items' => __('Search Documents', 'mindblank'),
              'not_found' => __('No Documents found', 'mindblank'),
              'not_found_in_trash' => __('No Documents found in Trash', 'mindblank')
          ),
          'public' => true,
          'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
          'has_archive' => 'documents',
          'supports' => array(
              'title',
              'editor',
              'excerpt',
          ), // Go to Dashboard Custom mind Blank post for supports
          'can_export' => true, // Allows export in Tools > Export
          'taxonomies' => array(
              'document_cat',
          ) // Add Category and Post Tags support
      ));
}



// Register Custom Taxonomy
add_action( 'init', 'mapi_register_taxonomies', 0 );
function mapi_register_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Document Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Document Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Document Category', 'text_domain' ),
		'all_items'                  => __( 'All Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Category', 'text_domain' ),
		'new_item_name'              => __( 'New Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add NewCategory', 'text_domain' ),
		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
		'update_item'                => __( 'Update Category', 'text_domain' ),
		'view_item'                  => __( 'View Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Categories', 'text_domain' ),
		'search_items'               => __( 'SearchCategories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Categories', 'text_domain' ),
		'items_list'                 => __( 'Categories list', 'text_domain' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'cat',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'document_cat', array( 'document' ), $args );

}
