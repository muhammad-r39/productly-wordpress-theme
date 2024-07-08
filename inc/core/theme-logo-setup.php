<?php

/**
 * Logo Section Callback
 */
function productly_custom_theme_logo_section_callback() {
    echo '<div class="setting-section-wrapper">';
    echo '<div class="section-title">';
    echo '<h2>' .__( 'Setup Logo', 'productly' ) . '</h2>';
    echo '<p>' . __( 'Upload the logo for your website.', 'productly' ) . '</p>';
    echo '</div>';
}

/**
 * Logo Field Callback
 */
function productly_custom_theme_logo_field_callback() {
    $logo = get_option( 'productly_custom_theme_logo' );
    ?>
    <input type="hidden" id="productly_custom_theme_logo" name="productly_custom_theme_logo" value="<?php echo esc_attr( $logo ); ?>" />
    <button type="button" class="button" id="productly_custom_theme_logo_button"><?php _e( 'Upload Logo', 'productly' ); ?></button>
    <div id="productly_custom_theme_logo_preview" style="margin-top: 10px;">
        <?php if ($logo): ?>
            <img src="<?php echo esc_url( $logo ); ?>" style="max-width: 200px; height: auto;" />
        <?php endif; ?>
    </div>
        </div>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            var frame;
            $('#productly_custom_theme_logo_button').on('click', function(e) {
                e.preventDefault();
                if (frame) {
                    frame.open();
                    return;
                }
                frame = wp.media({
                    title: '<?php _e( 'Select or Upload Logo', 'productly' ); ?>',
                    button: {
                        text: '<?php _e( 'Use this logo', 'productly' ); ?>'
                    },
                    multiple: false
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#productly_custom_theme_logo').val(attachment.url);
                    $('#productly_custom_theme_logo_preview').html('<img src="'+attachment.url+'" style="max-width: 200px; height: auto;" />');
                });
                frame.open();
            });
        });
    </script>
    <?php
}

/**
 * Enqueue Media Library Scripts
 */
function productly_custom_theme_admin_scripts() {
    if ( isset($_GET['page']) && $_GET['page'] == 'productly-custom-theme' ) {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'productly_custom_theme_admin_scripts' );