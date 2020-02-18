<?php

if ( ! defined("ABSPATH")) {
    exit;
}

function ruslabel_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'ruslabel' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'ruslabel' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Подвал с описанием', '' ),
        'id' => 'footer-left',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 col-md-5 mb-4 footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="caption_text">',
        'after_title' => '</div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Виджет формы в подвале', '' ),
        'id' => 'footer-form',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 col-md-6 mb-4 footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="caption_block">',
        'after_title' => '</div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Виджет карты', '' ),
        'id' => 'footer-map',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 col-md-6 mb-4 footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="caption_block">',
        'after_title' => '</div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Область виджетов', '' ),
        'id' => 'footer-menu1',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 col-md-2 mb-4 footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="caption_footer_widget">',
        'after_title' => '</div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Меню 2 - футер', '' ),
        'id' => 'footer-menu2',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 col-md-2 mb-4 footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="caption_footer_widget">',
        'after_title' => '</div>',
    ) );
    register_sidebar( array(
        'name' => __( 'Блок о нас', '' ),
        'id' => 'about_us',
        'description' => __( 'Подвал', '' ),
        'before_widget' => '<div class="col-12 mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<div class="mb-2">',
        'after_title' => '</div>',
    ) );
}
add_action( 'widgets_init', 'ruslabel_widgets_init' );