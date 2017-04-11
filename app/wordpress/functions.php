<?php
//Поддержка темой (меню, превью)
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );




// поддержка виджетов
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar( array(
    'before_widget' => '<div class="tag-links">',
    'after_widget' => '</div>',
    'before_title' => '<p style="display: none">',
    'after_title' => '</p>',
    'name' => 'header_tags',
    'description' => __( 'Специально для популярных тегов в хедере' ),
) );


// Регистрация главного меню
function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' 	=> __( 'Primary Menu', 'Antiraid' ),
            'footer-menu' 	=> __( 'Footer Menu', 'Antiraid' ),
        )
    );

}
add_action( 'init', 'register_theme_menus' );


//Добавление класса active к current page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}



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


function theme_js() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', '', '', true );
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'MagnificPopup', get_template_directory_uri() . '/js/plugins/magnific-popup.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'modal-form', get_template_directory_uri() . '/js/plugins/modal-form.js', array('jquery', 'MagnificPopup'), '', true );

    if (is_page('kontakty')){
        wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/plugins/contact-form.js', array('jquery', 'modal-form'), '', true );
    }
    if ( is_single()){
        wp_enqueue_script( 'parallax-single', get_template_directory_uri() . '/js/plugins/parallax.js', array('jquery'), '', true );
        wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('parallax-single'), '', true );

    }

    if ( is_singular( 'photoalbums' )){
        wp_enqueue_style( 'PSW_css', get_template_directory_uri() . '/css/plugins/photoswipe/photoswipe.css');
        wp_enqueue_style( 'PSW_def', get_template_directory_uri() . '/css/plugins/photoswipe/default-skin/default-skin.css');
        wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/plugins/masonry.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'PSW_min_js', get_template_directory_uri() . '/js/plugins/photoswipe/photoswipe.min.js', array('jquery', 'masonry', ), '', true );
        wp_enqueue_script( 'PSW_def_js', get_template_directory_uri() . '/js/plugins/photoswipe/photoswipe-ui-default.min.js', array('jquery', 'masonry', 'PSW_min_js'), '', true );
        wp_enqueue_script( 'PSW_run_js', get_template_directory_uri() . '/js/plugins/photoswipe/psw.run.js', array('jquery', 'masonry', 'PSW_min_js', 'PSW_def_js'), '', true );
        wp_enqueue_script( 'cust_js', get_template_directory_uri() . '/js/custom.js', array('PSW_run_js'), '', true );

    }
    if ( is_page('Главная страница') or is_page('o-nas')){
        wp_enqueue_style( 'owl_oNasCss', get_template_directory_uri() . '/css/plugins/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_oNasDef', get_template_directory_uri() . '/css/plugins/owl.theme.default.min.css');
        wp_enqueue_script( 'owl_oNasJs', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'plug-custom', get_template_directory_uri() . '/js/plugins/custom.js', array('owl_oNasJs'), '', true );
}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );







function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Подключение скрипто


// Добавление отдельных стилей и скриптов для главной страницы
/*function main_page() {
    if ( is_page('Главная страница') )
        wp_enqueue_style( 'owl_oNasCss', get_template_directory_uri() . '/css/plugins/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_oNasDef', get_template_directory_uri() . '/css/plugins/owl.theme.default.min.css');
        wp_enqueue_script( 'owl_oNasJs', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'main_page' );*/


// Добавление отдельных стилей и скриптов для страницы о нас
/*function aboutUs() {
    if ( is_page('o-nas') )
        wp_enqueue_style( 'owl_oNasCss', get_template_directory_uri() . '/css/plugins/owl.carousel.min.css' );
        wp_enqueue_style( 'owl_oNasDef', get_template_directory_uri() . '/css/plugins/owl.theme.default.min.css');
        wp_enqueue_script( 'owl_oNasJs', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'aboutUs' );*/



// Добавление отдельных стилей и скриптов для страницы о нас
/*function contacts() {
    if ( is_page('kontakty') )
    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/plugins/contact-form.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'contacts' );*/







// Добавление отдельных стилей и скриптов для страницы о нас
/**
 *
 */
/*function single_media() {
    if ( is_singular( 'photoalbums' ) )
        wp_enqueue_style( 'PSW_css', get_template_directory_uri() . '/css/plugins/photoswipe/photoswipe.css');
        wp_enqueue_style( 'PSW_def', get_template_directory_uri() . '/css/plugins/photoswipe/default-skin/default-skin.css');
        wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/plugins/masonry.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'PSW_min_js', get_template_directory_uri() . '/js/plugins/photoswipe/photoswipe.min.js', array('jquery', 'masonry', ), '', true );
        wp_enqueue_script( 'PSW_def_js', get_template_directory_uri() . '/js/plugins/photoswipe/photoswipe-ui-default.min.js', array('jquery', 'masonry', 'PSW_min_js'), '', true );
        wp_enqueue_script( 'PSW_run_js', get_template_directory_uri() . '/js/plugins/photoswipe/psw.run.js', array('jquery', 'masonry', 'PSW_min_js', 'PSW_def_js'), '', true );
}

add_action( 'wp_enqueue_scripts', 'single_media' );*/






// Добавление отдельных стилей и скриптов для страницы о нас
/*function single_news() {
    if ( is_single() )
        wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/plugins/parallax.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'single_news' );*/


?>