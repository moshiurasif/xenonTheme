<?php
// theme function for header area
function xenon_header_area($wp_customize)
{
    // header area
    $wp_customize->add_section('xenon_header_area', array(
        'title' => __('Header Area', 'xenon'),
        'description' => 'You can change header section here'
    ));
    $wp_customize->add_setting('xenon_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/logo.png',

    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'xenon_logo', array(
        'label' => 'Logo Upload',
        'description' => 'You can change your logo here',
        'settings' => 'xenon_logo',
        'section' => 'xenon_header_area',
    )));
    // menu option
    $wp_customize->add_section('xenon_menu_option', array(
        'title' => __('Menu Align Option', 'xenon'),
        'description' => 'You can change your menu align here'
    ));
    $wp_customize->add_setting('xenon_menu_position', array(
        'default' => 'right_menu'
    ));
    $wp_customize->add_control('xenon_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'xenon_menu_position',
        'section' => 'xenon_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
    // footer section
    $wp_customize->add_section('xenon_footer_area', array(
        'title' => __('Footer Area', 'xenon'),
        'description' => 'You can change your footer section here'
    ));
    $wp_customize->add_setting('copyright_area', array(
        'default' => '&copy; Copyright 2023 | Moshiur Asif'
    ));
    $wp_customize->add_control('copyright_area', array(
        'label' => 'Copyright Text',
        'description' => 'Change Copyright text',
        'setting' => 'copyright_area',
        'section' => 'xenon_footer_area',

    ));
}
add_action('customize_register', 'xenon_header_area');
