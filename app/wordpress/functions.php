<?php
//Поддержка темой (меню, превью)
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// Регистрация главного меню
function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' 	=> __( 'Primary Menu', 'Antiraid' )
        )
    );

}
add_action( 'init', 'register_theme_menus' );



// ================ Подключение стилей ======================
function wpt_theme_styles() {
    wp_enqueue_style( 'Normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'Grid', get_template_directory_uri() . '/css/bootstrap-grid.css' );
    wp_enqueue_style( 'MagnificPopup', get_template_directory_uri() . '/css/plugins/magnific-popup.css' );
    wp_enqueue_style( 'Custom', get_template_directory_uri() . '/css/custom.css' );
    wp_enqueue_script('Awesome','https://use.fontawesome.com/c873fc24b7.js', '', true );
    wp_enqueue_style( 'Font-Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );



function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Подключение скрипто
function theme_js() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', '', '', true );
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'MagnificPopup', get_template_directory_uri() . '/js/plugins/magnific-popup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'Custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
    wp_enqueue_script( 'modal-form', get_template_directory_uri() . '/js/plugins/modal-form.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );


// Добавление отдельных стилей и скриптов для главной страницы
function main_page() {
    if ( is_page('Главная страница') )
        wp_enqueue_style( 'owl_oNasCss', get_template_directory_uri() . '/css/plugins/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_oNasDef', get_template_directory_uri() . '/css/plugins/owl.theme.default.min.css');
        wp_enqueue_script( 'owl_oNasJs', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'main_page' );


// Добавление отдельных стилей и скриптов для страницы о нас
function aboutUs() {
    if ( is_page('o-nas') )
        wp_enqueue_style( 'owl_oNasCss', get_template_directory_uri() . '/css/plugins/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_oNasDef', get_template_directory_uri() . '/css/plugins/owl.theme.default.min.css');
        wp_enqueue_script( 'owl_oNasJs', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'aboutUs' );



// Добавление отдельных стилей и скриптов для страницы о нас
function contacts() {
    if ( is_page('kontakty') )
    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/plugins/contact-form.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'contacts' );

// Добавление отдельных стилей и скриптов для страницы о нас
function single_news() {
    if ( is_single() )
        wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/plugins/parallax.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'single_news' );


?>