<?php

/**
 * Template Name: Главная страница
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RusLabel
 */

get_header();
?>

    <!--Каруселька-->
    <div class="content container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/1.jpg" class="d-block" alt="...">
                    <div class="carousel-caption  d-md-block">
                        <h5>Жакардовые этикетки</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/2.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/1.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Назад</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Вперед</span>
            </a>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row caption_block">
            Популярные категории
        </div>
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <a href="http://ruslabel.loc:81/category/%d1%8d%d1%82%d0%b8%d0%ba%d0%b5%d1%82%d0%ba%d0%b8/"><div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/1.jpg");'>
                    <span>Этикетки</span>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <a href="http://ruslabel.loc:81/category/%d0%bb%d0%b5%d0%bd%d1%82%d1%8b/"><div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/2.jpg");'>
                    <span>Ленты</span>
                </div>
                </a>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/3.jpg");'>
                    <span>Шнуры</span>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/1.jpg");'>
                    <span>Бирко держатели</span>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/2.jpg");'>
                    <span>Пуллеры</span>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <div class="category_box d-flex" style='background: linear-gradient(0deg, rgba(56, 23, 120, 0.3), rgba(56, 23, 120, 0.3)), url("<?php echo get_template_directory_uri()?>/assets/img/3.jpg");'>
                    <span>Кружева</span>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex mt-5 mb-5 bg_fiol">
        <div class="container pb-5 pt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="caption_text">Немного о нас</div>
                    <p>Мы специализируемся на изготовлении этикеток для швейных изделий уже более 5 лет.</p>

                    <p>Наша фабрика оснащена несколькими производственными линиями с разной направленностью и работает без выходных.
                        Мы эксперты в производстве этикеток.</p>
                    <hr>
                    <div class="row">
                        <?php dynamic_sidebar( 'about_us' ); ?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <iframe style="width: 100%; height: 100%; min-height: 300px" src="https://www.youtube.com/embed/Dtn4zYcTZis" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row caption_block ">
            Почему мы
        </div>
        <div class="row">
            <div class="col-12 col-md-4 facts">
                <span class="facts_number">10 000 000 +</span>
                <span class="facts_text">Метров изготовленого материала</span>
            </div>
            <div class="col-12 col-md-4 facts">
                <span class="facts_number">1 450 000 +</span>
                <span class="facts_text">Этикеток уже произведено</span>
            </div>
            <div class="col-12 col-md-4 facts">
                <span class="facts_number">1 000 +</span>
                <span class="facts_text">Довольных клиентов</span>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 pt-5">
        <div class="row caption_block ">
            Наши преимущества
        </div>
        <div class="row advantages">
            <div class="col-12 col-md-3 advantages__block">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/delivery.jpg" alt="Бесплатная доставка">
                <div class="advantages__info">
                    <span class="advantages__title">Бесплатная доставка</span>
                    <span class="advantages__term">По городу иваново</span>
                </div>
            </div>
            <div class="col-12 col-md-3 advantages__block">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/create_maket.jpg" alt="Бесплатная доставка">
                <div class="advantages__info">
                    <span class="advantages__title">Разработка макета</span>
                    <span class="advantages__term">При заказе с сайта бесплатно</span>
                </div>
            </div>
            <div class="col-12 col-md-3 advantages__block">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/narezka.jpg" alt="Бесплатная доставка">
                <div class="advantages__info">
                    <span class="advantages__title">Бесплатная резка</span>
                    <span class="advantages__term">сгиб, загиб этикеток</span>
                </div>
            </div>
            <div class="col-12 col-md-3 advantages__block">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/sale_feedback.jpg" alt="Бесплатная доставка">
                <div class="advantages__info">
                    <span class="advantages__title">Скидка 5%</span>
                    <span class="advantages__term">за оставленый отзыв</span>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();