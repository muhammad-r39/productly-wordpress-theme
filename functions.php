<?php
/**
 * Productly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Productly Custom Theme
 * @since 1.0.0
 */


/**
 * Define Constants
 */
define( 'PRODUCTLY_THEME_VERSION', '1.0.0' );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Enqueue Scripts and Styles
 */
function productly_theme_scripts() {
    wp_enqueue_script('productly-theme-script', THEME_URI . 'js/productly-script.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'productly_theme_scripts' );

/**
 * Admin Styles
 */
function productly_custom_admin_styles() {
    wp_enqueue_style('custom-admin-style', THEME_URI . '/admin/productly-admin-style.css');
}
add_action('admin_enqueue_scripts', 'productly_custom_admin_styles');

/**
 * Register Navigation Menus
 */
function productly_theme_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'productly' ),
        'quick-links'  => __( 'Quick Links', 'productly' ),
        'legal-staff'  => __( 'Legal Stuff', 'productly' ),
    ) );
}
add_action( 'after_setup_theme', 'productly_theme_menus' );

/**
 * Add Theme Support
 */
function productly_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'productly_theme_setup' );

/**
 * Theme Settings.
 */
require_once THEME_DIR . 'inc/core/theme-settings.php';


function productly_footer_widget() {
    ?>
    <h3>Knowing you're always on the best energy deal.</h3>
    <form>
        <input class="productly-signup-input" type="tel" placeholder="Enter your phone Number"><br>
        <input class="productly-btn btn-footer-signup" type="submit" value="Sign up Now">
    </form>
    <?php
}

add_shortcode('productly_footer_widget', 'productly_footer_widget');