<?php
if (!function_exists('yumm_theme_setup')) {
    function yumm_theme_setup()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
    }
}
add_action( 'after_setup_theme', 'yumm_theme_setup' );

function register_nav_menu_locations() {
    register_nav_menu('primary-navigation', __( 'Primary Navigation' ));
}
add_action( 'init', 'register_nav_menu_locations' );