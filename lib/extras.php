<?php
/*
 * Extra functions and hooks that are too small to require their own file
 * or don't fit into any files that we already created.
 */

if (!function_exists('yumm_alter_home_page_query')) {
    /*
     * Alters the home page query to include posts AND recipes.
     */
    function yumm_alter_home_page_query($query)
    {
        if ($query->is_home() && $query->is_main_query()) {
            $query->set('post_type', ['post', 'recipe']);
            //we remove the actions hooked on the '__after_loop' (post navigation)
            remove_all_actions('__after_loop');
        }
    }
}
add_action('pre_get_posts','yumm_alter_home_page_query');

if (!function_exists('yumm_wysiwyg_content_filter')) {
    /*
     * Wraps the output of the_content in a <div> with a .wysiwyg class for easy css targeting.
     */
    function yumm_wysiwyg_content_filter($content) {
        return '<div class="wysiwyg">' . $content . '</div>';
    }
}
add_filter( 'the_content', 'yumm_wysiwyg_content_filter' );

if (!function_exists('yumm_excerpt_read_more')) {
    /*
     * Replaces the default excerpt "read more" text
     */
    function yumm_excerpt_read_more($more)
    {
        return '&nbsp;<strong>[...Click to expand]</strong>';
    }
}
add_filter('excerpt_more', 'yumm_excerpt_read_more');