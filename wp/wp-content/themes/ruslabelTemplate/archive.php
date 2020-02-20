<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RusLabel
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
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
			<header class="page-header">
                <h1 class="page-title"><?php echo get_the_archive_title() ?></h1>
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
