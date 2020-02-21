<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RusLabel
 */

?>
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" class="w-100">
            <nav aria-label="breadcrumb" class="w-100">
                <div class="breadcrumb">
                    <a href="<?php echo home_url(); ?>""><i class="fas fa-home"></i></a> /
                    <?php the_category(' / ', single  ) ?>
                    <span><?php the_title();?></span>
                </div>
            </nav>
        </nav>
    </div>
    <div class="row main_content_block">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title ">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    <?php ruslabel_post_thumbnail(); ?>

                    <div class="entry-content row mb-4">
                        <?php
                        the_content();
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ruslabel' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->

                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="entry-footer">
                            <?php
                            edit_post_link(
                                sprintf(
                                    wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Edit <span class="screen-reader-text">%s</span>', 'ruslabel' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    get_the_title()
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                            ?>
                        </footer><!-- .entry-footer -->
                    <?php endif; ?>
        </article><!-- #post-<?php the_ID(); ?> -->
</div>
</div>

