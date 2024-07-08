<?php

/**
 * Add Custom Admin Sidebar
 */
function productly_custom_theme_menu() {
    add_menu_page(
        __( 'Productly Custom Theme', 'productly' ), // Page title
        __( 'Productly Custom Theme', 'productly' ), // Menu title
        'manage_options',                            // Capability
        'productly-custom-theme',                    // Menu slug
        'productly_custom_theme_page',               // Callback function
        'dashicons-admin-generic',                   // Icon URL
        20                                           // Position
    );
}
add_action( 'admin_menu', 'productly_custom_theme_menu' );

/**
 * Display Custom Admin Page
 */
function productly_custom_theme_page() {
    ?>
    <div class="wrap productly-setting">
        <h1><?php _e( 'Productly Custom Theme Settings', 'productly' ); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'productly_custom_theme_settings_group' );
            do_settings_sections( 'productly-custom-theme' );
            echo '</div>';
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

/**
 * Register Settings Sections
 */
function productly_custom_theme_settings() {
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_logo' );
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_signin_link' );
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_signup_link' );
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_signin_page' );
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_signup_page' );
    register_setting( 'productly_custom_theme_settings_group', 'productly_custom_theme_footer_widget' );

    add_settings_section(
        'productly_custom_theme_logo_section',
        '',
        'productly_custom_theme_logo_section_callback',
        'productly-custom-theme'
    );

    add_settings_field(
        'productly_custom_theme_logo_field',
        '',
        'productly_custom_theme_logo_field_callback',
        'productly-custom-theme',
        'productly_custom_theme_logo_section'
    );

    add_settings_section(
        'productly_custom_theme_links_section',
        '',
        'productly_custom_theme_links_section_callback',
        'productly-custom-theme'
    );

    add_settings_field(
        'productly_custom_theme_signin_field',
        '',
        'productly_custom_theme_signin_field_callback',
        'productly-custom-theme',
        'productly_custom_theme_links_section'
    );

    add_settings_field(
        'productly_custom_theme_signup_field',
        '',
        'productly_custom_theme_signup_field_callback',
        'productly-custom-theme',
        'productly_custom_theme_links_section'
    );

    add_settings_section(
        'productly_custom_theme_footer_widget_section',
        '',
        'productly_custom_theme_footer_widget_section_callback',
        'productly-custom-theme'
    );

    add_settings_field(
        'productly_custom_theme_footer_widget_field',
        '',
        'productly_custom_theme_footer_widget_field_callback',
        'productly-custom-theme',
        'productly_custom_theme_footer_widget_section'
    );
}
add_action( 'admin_init', 'productly_custom_theme_settings' );

require_once THEME_DIR . 'inc/core/theme-logo-setup.php';
require_once THEME_DIR . 'inc/core/theme-user-area.php';
require_once THEME_DIR . 'inc/core/theme-footer-widget.php';
