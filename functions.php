<?php

add_action('after_setup_theme', 'starblog_basic_setup');
function starblog_basic_setup(){
    //// textdomain

    load_theme_textdomain('starblog' , get_template_directory().'/lang');

    ////// basic

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    ////////// Menu register

    register_nav_menus(array(
        'main-menu' => "Main menu",
    ));
}

////////////////// Menu li class adding

add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}


/////////// fonts function

    function starblog_fonts(){
        $fonts = array();
        $fonts[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap';

        $starblog_fonts = add_query_arg(array(
            'family' => urlencode(implode($fonts)),
        ) , 'https://fonts.googleapis.com/css');

        return $starblog_fonts;
    }

////// stylesheet call

add_action('wp_enqueue_scripts' , 'starblog_stylesheet_call');
function starblog_stylesheet_call(){
    wp_enqueue_style('bootcss' , get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
   wp_enqueue_style('maincss' , get_template_directory_uri().'/assets/css/starblog.css');
    wp_enqueue_style('owl' , get_template_directory_uri().'/assets/css/owl.css');
    wp_enqueue_style('starfonts', starblog_fonts());

    wp_enqueue_style( 'dashicons' );
    wp_enqueue_style('stylesheet' , get_stylesheet_uri());
}

////// scripts call

add_action('wp_enqueue_scripts' , 'starblog_scripts_call');
function starblog_scripts_call(){
    wp_enqueue_script('bootjs' , get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '' , false);
    wp_enqueue_script('custom' , get_template_directory_uri().'/assets/js/custom.js', array('jquery', 'bootjs'), '' , false);
    wp_enqueue_script('owl' , get_template_directory_uri().'/assets/js/owl.js', array('jquery', 'bootjs', 'custom'), '' , false);
}

////////// sidebar registration

add_action('widgets_init', 'starblog_sidebar');
function starblog_sidebar(){
    register_sidebar(array(
        'id'            => 'star-sidebar',
        'name'          => 'Right Sidebar',
        'description'   => 'Add your widget here',
        'before_widget' => '<div class="col-lg-12"><div class="sidebar-item">',
        'after_widget'  => '</div></div></div>',
        'before_title'  => '<div class="sidebar-heading"><h2>',
        'after_title'   => '</h2></div><div class="content">',
    ));
}

/////////// theme Option file call

if(file_exists(dirname(__FILE__).'/customizer.php')){
    require_once(dirname(__FILE__).'/customizer.php');
}