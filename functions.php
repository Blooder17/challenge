<?php
/**
 * Challenge's functions and definitions
 */

if (!function_exists('setup')) {
    /** Registers support for various Wordpress features */
    function setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('menus');
    }
}
add_action( 'after_setup_theme', 'setup' );

if (!function_exists('enqueue_scripts')) {
    function enqueue_scripts() {
        //My CSS
        wp_enqueue_style('challenge-style', get_stylesheet_directory_uri() . '/style');
        //My JS file
        wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script', '', '', true);
        //Bootstrap CSS and JS CDNs
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js');
        // Bootstrap icons
        wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css');
        //Swiper CSS and JS CDNs
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (!function_exists('register_acf_blocks')) {
    /** Registering ACF custom blocks */
    function register_acf_blocks() {
        register_block_type(__DIR__ . '/blocks/gallery');
        register_block_type(__DIR__ . '/blocks/items-group');
    }
}
add_action('init', 'register_acf_blocks');
