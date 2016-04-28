<?php
/*
 * Functions for the YUMM!! theme.
 *
 * Functions will be pluggable in child themes via the use of !function_exists() prior to definition.
 */

/*
 * Array of files to include.
 */
$files = [
    "lib/init.php",
    "lib/cpt.php",
    "lib/scripts.php",
    "lib/template-tags.php"
];

/*
 * Loop through and include all the files in $files Array.
 */
foreach ($files as $file) {
    include $file;
}


// TODO: move me!
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

// TODO: move me!
if (!function_exists('yumm_wysiwyg_content_filter')) {
    /*
     * Wraps the output of the_content in a <div> with a .wysiwyg class for easy css targeting.
     */
    function yumm_wysiwyg_content_filter($content) {
        return '<div class="wysiwyg">' . $content . '</div>';
    }
}
add_filter( 'the_content', 'yumm_wysiwyg_content_filter' );
