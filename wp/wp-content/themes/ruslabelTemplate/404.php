<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RusLabel
 */

get_header();
?>
<div class="container mb-5 mt-5">
    <div id="primary" class="content-area p-5">
        <main id="main" class="site-main">
            <section class="error-404 not-found p-5">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Извените но такой страницы не существует', 'ruslabel' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'Похоже, в этом месте ничего не нашли.', 'ruslabel' ); ?></p>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<?php
get_footer();
