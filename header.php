<?php
/**
 * The template file for header area
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Productly Custom Theme
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
            if(is_home() || is_front_page()) {
                bloginfo('name');
                echo ' | ';
                bloginfo('description');
            } else {
                wp_title('|', true, 'right') . bloginfo('name');
            }
        ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="productly-container">
            <div class="site-branding">
                <?php 
                    $logo = get_option('productly_custom_theme_logo');
                    if ($logo): ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" />
                        </a>
                <?php else: ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>
            <div class="primary-navigation">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                    ));
                    ?>
                    <div class="user-buttons">
                        <?php
                            // Retrieve and display signin button
                            $signin_link = get_option('productly_custom_theme_signin_link');
                            $signin_page = get_option('productly_custom_theme_signin_page');
                            $signin_url = $signin_link ? esc_url($signin_link) : esc_url(get_permalink($signin_page));
                        ?>
                        <a class="productly-btn btn-signin" href="<?php echo $signin_url; ?>">Sign In</a>

                        <?php
                            // Retrieve and display signup button
                            $signup_link = get_option('productly_custom_theme_signup_link');
                            $signup_page = get_option('productly_custom_theme_signup_page');
                            $signup_url = $signup_link ? esc_url($signup_link) : esc_url(get_permalink($signup_page));
                        ?>
                        <a class="productly-btn btn-signup" href="<?php echo $signup_url; ?>">Sign Up</a>
                    </div>
                </nav>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>