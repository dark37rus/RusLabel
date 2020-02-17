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
            <div class="col-2" id="menu_swither">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times" style="display: none;"></i>
            </div>
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
            <nav>
                <ul class="menu">
                    <li><a href="#">Наши услуги</a></li>
                    <li><a href="#" class="menu__dropdown">Продукция</a>
                        <ul class="submenu">
                            <li><a href="#" class="menu__dropdown">Этикетки</a>
                                <ul class="submenu">
                                    <li><a href="#">Пуллеры</a></li>
                                    <li><a href="#">Биркодержатели</a></li>
                                    <li><a href="#">Sub menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="menu__dropdown">Ленты</a>
                                <ul class="submenu">
                                    <li><a href="#">Пуллеры</a></li>
                                    <li><a href="#">Биркодержатели</a></li>
                                    <li><a href="#">Sub menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Item name</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

