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
    wp_enqueue_style('', get_template_directory_uri() . '');
}
/*
 * подключаем скрипты и стили
 * */
add_action('wp_enqueue_scripts', 'loadStyleScript');

