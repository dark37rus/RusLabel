<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RusLabel
 */

?>

<!--Подвал-->
<footer>
    <div class="grey_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'footer-map' ); ?>
                <?php dynamic_sidebar( 'footer-form' ); ?>
            </div>
        </div>
    </div>
    <div class="black_bg widgets_area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'footer-left' ); ?>
                <?php dynamic_sidebar( 'footer-menu1' ); ?>
                <?php dynamic_sidebar( 'footer-menu2' ); ?>
                <?php dynamic_sidebar( 'footer-menu3' ); ?>
            </div>
        </div>
    </div>
    <div class="bottom_line_site">
        <div class="container">
            <span>2020 © RusLabel - изготовление и печать этикеток</span>
            <span><a href="">Biframe - Разработка сайтов</a></span>
        </div>
    </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
