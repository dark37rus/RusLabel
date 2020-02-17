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
                <div class="col-12 col-md-2">
                    <div class="caption_footer_widget">
                        Компания
                    </div>
                    <div class="body_footer_widget">
                        <ul>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">О нас</a></li>
                            <li><a href="">Наши услуги</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="caption_footer_widget">
                        Информация
                    </div>
                    <div class="body_footer_widget">
                        <ul>
                            <li><a href="">Условия оплаты</a></li>
                            <li><a href="">Условия доставки</a></li>
                            <li><a href="">Требования к макету</a></li>
                            <li><a href="">Услуги по нарезке</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="caption_footer_widget">
                        Контакты
                    </div>
                    <div class="body_footer_widget">
                        <ul>
                            <li><a href="tel:74932123456">+7 (4932) 12 34 56</a></li>
                            <li><a href="">rus.etiketka@mail.ru</a></li>
                        </ul>
                        <div>
                            <div class="soc_block">
                                <p class="soc_block__caption">Мы в соц. сетях</p>
                                <p class="soc_block__icon">
                                    <a href="https://www.instagram.com/ruslabel37/"><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-vk"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
