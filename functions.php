<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER css/screen.cs **/
    wp_register_style( 'main', THEME_DIR . '/assets/css/main.css', array(), '1', 'all' );

    wp_enqueue_style( 'main' );
         
}
add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
// REG NAV
register_nav_menu( 'main_menu', 'Main menu' );