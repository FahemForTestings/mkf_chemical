<?php

if (! function_exists('mkf_chemical_theme_support')):
    function mkf_chemical_theme_support() {
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }
endif;
add_action('after_setup_theme', 'mkf_chemical_theme_support');

if (! function_exists('mkf_styles')):
function mkf_styles() {
    wp_enqueue_style('mkf_chemical_theme_style', get_stylesheet_uri(), array(), false, 'all');
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all');
}
endif;
add_action('wp_enqueue_scripts', 'mkf_styles');

register_nav_menus(array(
    'primary' => esc_html__('Primary', 'mkf-chemical'),
    'footer' => esc_html__('Footer', 'mkf-chemical'),
));