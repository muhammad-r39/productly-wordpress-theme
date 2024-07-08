<?php
/**
 * The template file for footer area
 *
 * Starts after the closing of </sidebar> if available, otherwise after the </main> tag.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Productly Custom Theme
 * @since 1.0.0
 */
?>
    <footer class="productly-footer">
        <div class="productly-container">
            <div class="productly-widget widget-1">
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
            <div class="productly-widget widget-2">
                <h3>Quick Links</h3>
                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'quick-links',
                        'menu_id'        => 'quick-links-menu',
                    ));
                    ?>
                </nav>
            </div>
            <div class="productly-widget widget-3">
                <h3>Legal Stuff</h3>
                <nav class="footer-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'legal-staff',
                        'menu_id'        => 'legal-staff-menu',
                    ));
                    ?>
                </nav>
            </div>
            <div class="productly-widget widget-4">
                <?php
                    // Retrieve and display footer widget
                    $footer_widget = get_option('productly_custom_theme_footer_widget');
                    if ($footer_widget) {
                        echo do_shortcode($footer_widget);
                    }
                ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>