<?php

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

    /**
     * Register menu function.
     */

function theme_register_nav_menu() {
    register_nav_menu( 'menu', 'Main menu' );
}

    /**
     * Add custom-logo support.
     */

add_theme_support( 'custom-logo', [
    'height'      => 190,
    'width'       => 190,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
] );

if (!function_exists('add_styles_and_scripts')) {
    /**
     * Load JavaScripts and CSS.
     */
    function add_styles_and_scripts()
    {

        $the_theme = wp_get_theme();
        $theme_version = $the_theme->get('Version');

        $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/main.css');
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('reset-styles', get_template_directory_uri() . '/css/main.css', array(), $css_version);
        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $css_version);
        wp_enqueue_style('carousel-owl-style', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), $css_version);

        /**
         * Add Jquery version 3.4.1
         */

        wp_deregister_script('jquery');
        wp_register_script('jquery', ('https://code.jquery.com/jquery-3.4.1.min.js'), false, null);
        wp_enqueue_script('jquery');

        $js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/custom.js');
        wp_enqueue_script('my-custom-js', get_template_directory_uri() . '/js/custom.js', array(), $js_version, true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
        wp_enqueue_script('carousel-owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);

    }
}

    /**
     * Add my custom logo.
     */

function my_logo() {
    $output = '';
    $output .= '<a class="navbar-brand" aria-label="home" href="'.get_home_url().'">';
    $custom_logo_id = get_theme_mod('custom_logo');
    $custom_logo_attr = '';
    if ($custom_logo_id) {
        $custom_logo_attr = array(
            'class' => 'custom_logo',
        );
        $image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
        if (empty ($image_alt)) {
            $custom_logo_attr ['alt'] = get_bloginfo('name','display');
        }
    }
    $output .= wp_get_attachment_image($custom_logo_id, 'full', false, $custom_logo_attr). '</a>';

    echo $output;
}

