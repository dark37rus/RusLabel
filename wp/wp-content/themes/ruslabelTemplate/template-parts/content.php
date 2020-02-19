<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RusLabel
 */

?>

<div class="container">
    <div class="row">
        <?php if (is_singular()) : ?>
            <article class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php else : ?>
            <article class="col-12 col-md-3 mb-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php endif; ?>
                <?php if ('post' === get_post_type()) : ?>

                <?php endif; ?>
                <div class="entry-content">
                    <?php
                    the_content(sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ruslabel'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ));

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'ruslabel'),
                        'after' => '</div>',
                    ));
                    ?>
                </div><!-- .entry-content -->
                <?php ruslabel_post_thumbnail(); ?>
        <?php if (is_singular()) : ?>
        <?php the_title('<h1 class="entry-title mb-4">', '</h1>');
        else : ?>
        <?php the_title('<h5 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif; ?>
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
</div>

