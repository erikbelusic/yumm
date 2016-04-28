<?php
/*
 * Functions to be used in template files.
 */

if (!function_exists('yumm_list_recipe_categories')) {
    /*
     * Returns comma separated HTML links with the recipe categories for the current recipe.
     */
    function yumm_list_recipe_categories()
    {
        global $post;

        $terms = wp_get_post_terms( $post->ID, 'recipecategory', ['orderby' => 'name', 'order' => 'ASC']);

        $termsMarkup = "";

        foreach($terms as $index => $term) {
            if ($index !== 0) {
                $termsMarkup .= ", ";
            }
            $termsMarkup .= '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
        }

        return $termsMarkup;
    }
}
if (!function_exists('yumm_list_all_recipe_categories')) {
    /*
     * Returns HTML links wrapped in <li> for all non empty recipe categories.
     */
    function yumm_list_all_recipe_categories()
    {
        $terms = get_terms(['taxonomy' => 'recipecategory', 'hide_empty' => true]);

        $termsMarkup = "";

        foreach($terms as $index => $term) {
            $termsMarkup .= '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
        }

        return $termsMarkup;
    }
}
if (!function_exists('yumm_has_recipe_categories')) {
    /*
     * Checks if the current recipe is in any recipe categories.
     */
    function yumm_has_recipe_categories() {
        global $post;

        return (bool) count(wp_get_post_terms( $post->ID, 'recipecategory'));
    }
}