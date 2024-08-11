<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 100 );

// END ENQUEUE PARENT ACTION



// Google fonts
function enqueue_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


// Tailwind
function enqueue_tailwind_css() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'tailwind-css',
        'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.18/tailwind.min.css',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');


// Custom javascript
function custom_javascript() {
    wp_enqueue_script('custom-javascript',  trailingslashit( get_stylesheet_directory_uri() ) . '/assets/js/custom.js', array() );
}
add_action('wp_enqueue_scripts', 'custom_javascript');



// Prevent css styles from caching!!!
function child_theme_css() {
    wp_enqueue_style( 'main_css', trailingslashit( get_stylesheet_directory_uri() ) .  'assets/css/main.css?t=' . time(), array() );
}
add_action( 'wp_enqueue_scripts', 'child_theme_css', 10 );



// Prevent Elementor Text Editor, from removing <p> tags
function tiny_mce_dont_remove_p_tags($options) {
    $options['wpautop'] = false; // Keep <p> tags

    return $options;
}
add_filter( 'tiny_mce_before_init', 'tiny_mce_dont_remove_p_tags');



// Add page slug classname to body tag
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );



// Prevent big images from being resized
add_filter( 'big_image_size_threshold', '__return_false' );


