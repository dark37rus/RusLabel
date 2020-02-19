<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RusLabel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="p_prldr">
    <div class="contpre">
        <span class="svg_anm"></span>
        <br>
        <br>
        <div id="cube-loader">
            <div class="caption">
                <div class="cube-loader">
                    <div class="cube loader-1"></div>
                    <div class="cube loader-2"></div>
                    <div class="cube loader-4"></div>
                    <div class="cube loader-3"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Шапка сайта-->
<header class="header_site">
    <div class="container">
        <div class="header_site__content">
            <button class="navbar-toggler navbar-light d-md-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<!--            <div class="col-2" id="menu_swither">-->
<!--                <i class="fas fa-bars"></i>-->
<!--                <i class="fas fa-times" style="display: none;"></i>-->
<!--            </div>-->
            <div class="col-8 col-lg-4">
                <?php the_custom_logo()?>
            </div>
            <div class="col-2 col-lg-8">
                <div class="header_site__contacts">
                    <div class="d-flex info_block">
                        <span class="level_one_text"><i class="fas fa-phone"></i> +7 (920) 377 57 54</span>
                        <span class="level_two_text">rus.etiketka@mail.ru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu_line">
        <div class="container">
                <nav class="navbar navbar-expand-lg w-100 p-0">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php ruslabel_main_menu() ?>
                    </div>
                </nav>
        </div>
    </div>
</header>

