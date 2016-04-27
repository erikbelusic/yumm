<?php
/*
 * Functions to be used in template files.
 */

if (!function_exists('yumm_list_recipe_categories')) {
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
if (!function_exists('yumm_has_recipe_categories')) {
    function yumm_has_recipe_categories() {
        global $post;

        return (bool) count(wp_get_post_terms( $post->ID, 'recipecategory'));
    }
}