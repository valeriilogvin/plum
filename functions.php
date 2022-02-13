<?php

/**
 * Deregister JQery
 */
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );

function plum_scripts() {
    wp_enqueue_style(
        'plum-select2',
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
        array(),
        '1.0'
    );
    wp_enqueue_style(
        'plum-style',
        get_stylesheet_directory_uri() . '/css/styles.css',
        array(),
        '1.0'
    );

    if( is_page( 'calculator' ) || is_page( 'calculator-2' )  ) {
        wp_enqueue_style(
            'plum-calculator',
            get_stylesheet_directory_uri() . '/css/calculator.css',
            array(),
            '1.0'
        );
    }


    wp_enqueue_script(
        'plum-scripts',
        get_template_directory_uri() . '/js/scripts.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'plum-maska-nomera',
        get_template_directory_uri() . '/js/maska-nomera.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'plum-webfont',
        get_template_directory_uri() . '/js/webfont.js',
        array(),
        '1.0',
        true
    );
    if( is_page( 'calculator' ) || is_page( 'calculator-2' ) ) {
        wp_enqueue_script(
            'plum-select2',
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            array(),
            '1.0',
            true
        );
        wp_enqueue_script(
            'plum-calculator',
            get_template_directory_uri() . '/js/calculator.js',
            array(),
            '1.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'plum_scripts' );

add_filter('wpcf7_autop_or_not', '__return_false');

get_template_part( 'translate/translate' );

/**
 * Menu
 */
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('top', 'nav-bar');
}
