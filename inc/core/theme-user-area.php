<?php
/**
 * Section Callback
 */

function productly_custom_theme_links_section_callback() {
    echo '</div>';
    echo '<div class="setting-section-wrapper user-area">';
    echo '<div class="section-title">';
    echo '<h2>' . __( 'User Buttons', 'productly' ) . '</h2>';
    echo '<p>' . __( 'Add user registration and signin links.', 'productly' ) . '</p>';
    echo '</div>';
}

/**
 * Field Callback for SignIn Button
 */
function productly_custom_theme_signin_field_callback() {
    $signin_link = get_option( 'productly_custom_theme_signin_link' );
    $signin_page = get_option( 'productly_custom_theme_signin_page' );
    ?>
    <label for="productly_custom_theme_signin_link">SignIn Link</label><br>
    <input type="text" id="productly_custom_theme_signin_link" name="productly_custom_theme_signin_link" value="<?php echo esc_attr( $signin_link ); ?>" placeholder="<?php _e( 'Enter signin page link', 'productly' ); ?>"/>
    <?php _e( 'Or select a page:', 'productly' ); ?>
    <?php
    wp_dropdown_pages( array(
        'selected' => $signin_page,
        'name'     => 'productly_custom_theme_signin_page',
        'show_option_none' => __( 'None', 'productly' )
    ) );
}

/**
 * Field Callback for SignUp Button
 */
function productly_custom_theme_signup_field_callback() {
    $signup_link = get_option( 'productly_custom_theme_signup_link' );
    $signup_page = get_option( 'productly_custom_theme_signup_page' );
    ?>
    <label for="productly_custom_theme_signup_link">SignUp Link</label><br>
    <input type="text" id="productly_custom_theme_signup_link" name="productly_custom_theme_signup_link" value="<?php echo esc_attr( $signup_link ); ?>" placeholder="<?php _e( 'Enter signup page link', 'productly' ); ?>"/>
    <?php _e( 'Or select a page:', 'productly' ); ?>
    <?php
    wp_dropdown_pages( array(
        'selected' => $signup_page,
        'name'     => 'productly_custom_theme_signup_page',
        'show_option_none' => __( 'None', 'productly' )
    ) );
}