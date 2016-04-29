<?php
if (!function_exists('yumm_theme_assets')) {
    /**
     * Theme assets
     */
    function yumm_theme_assets()
    {
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Bitter:400,700%7COpen+Sans:300,700', false, null);
        wp_enqueue_style('yumm-css', get_template_directory_uri() . '/dist/css/main.css', false, null);

        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', [], null, true);
        wp_enqueue_script('yumm-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'yumm_theme_assets');
