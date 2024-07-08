<?php
/**
 * The template file for 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Productly Custom Theme
 * @since 1.0.0
 */

get_header(); ?>

<main class="not-found-page">
    <div class="productly-container block">
        <h1>Page Not Found</h1>
        <p>Sorry, the page you are looking for does not exist. Return to the <a href="<?php echo esc_url(home_url('/')); ?>">home</a> page.</p>
    </div>
</main>

<?php get_footer(); ?>