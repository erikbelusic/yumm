<?php
/*
 * Functions for the YUMM!! theme.
 */

$files = [
    "lib/init.php",
    "lib/cpt.php",
    "lib/scripts.php",
];

foreach ($files as $file) {
    include $file;
}


// TODO: move me!
function alter_home_page_query($query) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query-> set('post_type' ,['post', 'recipe']);
	    //we remove the actions hooked on the '__after_loop' (post navigation)
	    remove_all_actions ( '__after_loop');
    }
}
add_action('pre_get_posts','alter_home_page_query');
