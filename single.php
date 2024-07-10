<?php
/**
 * The template file for single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Productly Custom Theme
 * @since 1.0.0
 */

get_header(); ?>

<main class="blog-page">
    <div class="productly-container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                    if ( has_post_thumbnail() ) {
                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $thumbnail_url = wp_get_attachment_url( $thumbnail_id );
                    }
                ?>
                <div class="blog-header" style="background-image: url(<?php echo esc_url( $thumbnail_url ); ?>);">
                    <div class="blog-header-info">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <div class="entry-meta">
                        <?php
                            echo 'By <span class="author">' . get_the_author() . '</span>';
                            echo ' | ';
                            echo '<span class="posted-on">' . get_the_date() . '</span>';
                        ?>
                    </div>
                </div>
                </div>
                
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>