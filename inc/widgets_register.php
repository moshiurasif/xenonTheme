<?php
// Sidebar Register Function

function xenon_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'xenon'),
        'id'   => 'sideber-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'xenon'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1', 'xenon'),
        'id'   => 'footer-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'xenon'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'xenon'),
        'id'   => 'footer-2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'xenon'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'xenon'),
        'id'   => 'footer-3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'xenon'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'xenon_widgets_register');
