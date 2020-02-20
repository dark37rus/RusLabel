<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RusLabel
 */

?>
<div class="container">
    <nav aria-label="breadcrumb" class="w-100">
        <nav aria-label="breadcrumb" class="w-100">
            <div class="breadcrumb">
                <a href="<?php echo home_url(); ?>""><i class="fas fa-home"></i></a> /
                <?php the_category(' / ', multiple ); ?>
            </div>
        </nav>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'ruslabel' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <?php
                    if ( is_home() && current_user_can( 'publish_posts' ) ) :

                        printf(
                            '<p>' . wp_kses(
                            /* translators: 1: link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ruslabel' ),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ) . '</p>',
                            esc_url( admin_url( 'post-new.php' ) )
                        );

                    elseif ( is_search() ) :
                        ?>

                        <p><?php esc_html_e( 'Извените но ничего не найдено', 'ruslabel' ); ?></p>
                        <?php
                        get_search_form();

                    else :
                        ?>

                        <p><?php esc_html_e( 'В данной категории еще нету товаров или фотографий', 'ruslabel' ); ?></p>
                        <?php
                        get_search_form();

                    endif;
                    ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->
        </div>
    </div>
</div>

