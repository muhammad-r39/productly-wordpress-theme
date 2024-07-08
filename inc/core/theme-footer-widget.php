<?php

/**
 * Section Callbacks
 */
function productly_custom_theme_footer_widget_section_callback() {
    echo '</div>';
    echo '<div class="setting-section-wrapper">';
    echo '<div class="section-title">';
    echo '<h2>' . __( 'Footer Widget', 'productly' ) . '</h2>';
    echo '<p>' . __( 'Add HTML or shortcode, default is <code>[productly_footer_widget]</code>.', 'productly' ) . '</p>';
    echo '</div>';
}

/**
 * Field Callbacks
 */

function productly_custom_theme_footer_widget_field_callback() {
    $shortcode = get_option( 'productly_custom_theme_footer_widget' );
    ?>
    <textarea id="productly_custom_theme_footer_widget" name="productly_custom_theme_footer_widget" placeholder="<?php _e( 'Enter shortcode', 'productly' ); ?>" style="width: 50%;" /><?php echo esc_attr( $shortcode ? $shortcode : '[productly_footer_widget]' ); ?></textarea>
    <?php
}

get_option( 'productly_custom_theme_footer_widget' ) ? '' : update_option('productly_custom_theme_footer_widget', '[productly_footer_widget]'); 