<?php
/*
 * Adding the below code to the theme goes against "best practices".
 *
 * If this theme was work for hire, it would be prudent to put
 * the below code in a plugin, so if the client ever switches
 * themes, their data remains in tact. The solution becomes much
 * more complicated because the plugin needs to hook into the
 * templating system to return templates from within the plugin if
 * they do not exist within the theme.
 *
 * It only seems acceptable to define CPT in a theme if you are
 * developing a theme for distribution on Theme Forest or some other
 * similar market place.
 */

/*
 * Register Custom Post Types for Recipes
 */
if (!function_exists('yumm_recipe_post_type')) {
    function yumm_recipe_post_type()
    {
        $labels = [
            'name' => _x('Recipes', 'Post Type General Name', 'yumm'),
            'singular_name' => _x('Recipe', 'Post Type Singular Name', 'yumm'),
            'menu_name' => __('Recipes', 'yumm'),
            'name_admin_bar' => __('Recipe', 'yumm'),
            'archives' => __('Recipe Archives', 'yumm'),
            'parent_item_colon' => __('Parent Recipe:', 'yumm'),
            'all_items' => __('All Recipes', 'yumm'),
            'add_new_item' => __('Add New Recipe', 'yumm'),
            'add_new' => __('Add New', 'yumm'),
            'new_item' => __('New Recipe', 'yumm'),
            'edit_item' => __('Edit Recipe', 'yumm'),
            'update_item' => __('Update Recipe', 'yumm'),
            'view_item' => __('View Recipe', 'yumm'),
            'search_items' => __('Search Recipe', 'yumm'),
            'not_found' => __('Not found', 'yumm'),
            'not_found_in_trash' => __('Not found in Trash', 'yumm'),
            'featured_image' => __('Featured Image', 'yumm'),
            'set_featured_image' => __('Set featured image', 'yumm'),
            'remove_featured_image' => __('Remove featured image', 'yumm'),
            'use_featured_image' => __('Use as featured image', 'yumm'),
            'insert_into_item' => __('Insert into recipe', 'yumm'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'yumm'),
            'items_list' => __('Recipes list', 'yumm'),
            'items_list_navigation' => __('Recipes list navigation', 'yumm'),
            'filter_items_list' => __('Filter recipes list', 'yumm'),
        ];
        $args = [
            'label' => __('Recipe', 'yumm'),
            'description' => __('Recipe Description', 'yumm'),
            'labels' => $labels,
            'supports' => ['title', 'editor', 'author', 'thumbnail', 'revisions'],
            'taxonomies' => ['recipe_category'],
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        ];
        register_post_type('recipe', $args);

    }
}
add_action('init', 'yumm_recipe_post_type', 0);

/*
 * Register Custom Taxonomy for Recipe Categories
 */
if (!function_exists('yumm_recipe_category_taxonomy')) {
    function yumm_recipe_category_taxonomy() {
        $labels = [
            'name' => _x('Recipe Categories', 'Taxonomy General Name', 'yumm'),
            'singular_name' => _x('Recipe Category', 'Taxonomy Singular Name', 'yumm'),
            'menu_name' => __('Recipe Categories', 'yumm'),
            'all_items' => __('All Recipe Categories', 'yumm'),
            'parent_item' => __('Parent Recipe Category', 'yumm'),
            'parent_item_colon' => __('Parent Recipe Category:', 'yumm'),
            'new_item_name' => __('New Recipe Category Name', 'yumm'),
            'add_new_item' => __('Add New Recipe Category', 'yumm'),
            'edit_item' => __('Edit Recipe Category', 'yumm'),
            'update_item' => __('Update Recipe Category', 'yumm'),
            'view_item' => __('View Recipe Category', 'yumm'),
            'separate_items_with_commas' => __('Separate recipe categories with commas', 'yumm'),
            'add_or_remove_items' => __('Add or remove recipe categories', 'yumm'),
            'choose_from_most_used' => __('Choose from the most used', 'yumm'),
            'popular_items' => __('Popular Recipe Categories', 'yumm'),
            'search_items' => __('Search Recipe Categories', 'yumm'),
            'not_found' => __('Not Found', 'yumm'),
            'no_terms' => __('No recipe categories', 'yumm'),
            'items_list' => __('Recipe Categories list', 'yumm'),
            'items_list_navigation' => __('Recipe Categories list navigation', 'yumm'),
        ];
        $args = [
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
        ];
        register_taxonomy('recipecategory', ['recipe'], $args);
    }
}
add_action('init', 'yumm_recipe_category_taxonomy', 0);