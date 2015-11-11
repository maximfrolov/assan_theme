<?php
/*
 * загружаемые скрипты и стили
 * */
function loadStyleScript() {
    /* подключаемые скрипты */
    wp_enqueue_script('jquery_min', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('bootstrap_min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('jquery_easing_min', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js');
    wp_enqueue_script('jquery_sticky', get_template_directory_uri() . '/js/jquery.sticky.js');
    wp_enqueue_script('jquery_flexslider_min', get_template_directory_uri() . '/js/jquery.flexslider-min.js');
    wp_enqueue_script('jquery_stellar_min', get_template_directory_uri() . '/js/jquery.stellar.min.js');
    wp_enqueue_script('waypoints_min', get_template_directory_uri() . '/js/waypoints.min.js');
    wp_enqueue_script('jquery_counterup_min', get_template_directory_uri() . '/js/jquery.counterup.min.js');
    wp_enqueue_script('wow_min', get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script('owl_carousel_min', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('jquery_magnific_popup_min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('jquery_mb_ytplayer_min', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
    wp_enqueue_script('html5shiv_min', get_template_directory_uri() . '/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
    wp_enqueue_script('respond_min', get_template_directory_uri() . '/https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
    /* подключаемые стили */
    wp_enqueue_style('bootstrap_min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('font_awesome_min', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css" rel="stylesheet');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('owl_theme', get_template_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_style('yamm', get_template_directory_uri() . '/css/yamm.css');
    wp_enqueue_style('magnific_popup', get_template_directory_uri() . '/css/magnific-popup.css');
}

/*
 * подключаем скрипты и стили
 * */
add_action('wp_enqueue_scripts', 'loadStyleScript');

/*
 * добавляем виджеты
 * */
register_sidebar([
    'name'          => 'Меню',
    'id'            => 'menu_header',
    'before_widget' => '',
    'after_widget'  => '',
]);

register_sidebar([
    'name'          => 'Сайдбар',
    'id'            => 'sidebar',
    'before_widget' => '<div class="sidebar-box margin40 ">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="sidebar-box">',
    'after_title'   => '</h4>'
]);

/*$args = [
    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
    'id'            => 'unique-sidebar-id',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>'
];*/

/*
 * подключаем wp_bootstrap_navwalker.php
 * */
require_once('wp_bootstrap_navwalker.php');

/*
 * добавляем поддержку миниатюр для постов
 * */
add_theme_support('post-thumbnails');
set_post_thumbnail_size();
