<?php
if ( ! defined("ABSPATH")) {
    exit;
}

if ( ! function_exists( 'ruslabel_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ruslabel_setup() {

        load_theme_textdomain( 'ruslabel', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        register_nav_menus( array(
            'menu-1' => esc_html__( 'Главное меню', 'ruslabel' ),
        ));

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        add_theme_support( 'custom-background', apply_filters( 'ruslabel_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'ruslabel_setup' );

function ruslabel_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'ruslabel_content_width', 640 );
}
add_action( 'after_setup_theme', 'ruslabel_content_width', 0 );