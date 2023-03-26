<?php
// css, js, jquery added
function xenon_css_js_jquery_add()
{
    wp_enqueue_style('xenon_style', get_stylesheet_uri());
    wp_register_style('xenon_bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_register_style('xenon_custom_css', get_template_directory_uri() . "/assets/css/custom.css", array(), "1.0.0", "all");
    wp_enqueue_style('xenon_bootstrap');
    wp_enqueue_style('xenon_custom_css');
    // jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('xenon_bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), "5.3.0", true);
    wp_enqueue_script('xenon_main_js', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0.0", true);
}
add_action('wp_enqueue_scripts', 'xenon_css_js_jquery_add');
// Google Fonts Enqueue
function ali_add_google_fonts()
{
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ali_add_google_fonts');
