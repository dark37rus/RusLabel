<?php

if ( ! defined("ABSPATH")) {
    exit;
}


function ruslabel_scripts() {
    wp_enqueue_script( 'ruslabel-navigation', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'ruslabel-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array());
    wp_enqueue_script( 'ruslabel-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array());
    wp_enqueue_script( 'ruslabel-preloader', get_template_directory_uri() . '/assets/js/scritps_menu.js');
    wp_enqueue_script( 'ruslabel-magnific-popupjs', get_template_directory_uri() . '/assets/js/magnific-popup.js');
    wp_enqueue_script( 'ruslabel-fontawesome', 'https://kit.fontawesome.com/5f8026e1ab.js', array());
    wp_enqueue_script( 'ruslabel-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array());
    wp_enqueue_script( 'ruslabel-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array());

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'ruslabel_scripts' );


function ruslabel_style() {
    wp_enqueue_style( 'ruslabel-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',  array());
    wp_enqueue_style( 'ruslabel-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css',  array());
    wp_enqueue_style( 'ruslabel-stylesheets', get_template_directory_uri() . '/assets/css/ruslabel-style.css',  array());
}
add_action( 'wp_enqueue_scripts', 'ruslabel_style' );