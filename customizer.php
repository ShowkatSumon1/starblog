<?php

add_action('customize_register' , 'starblog_theme_options');
function starblog_theme_options($customize){
    /////////// options
    $customize-> add_panel('theme_options' , array(
        'title'     => 'Theme Options',
        'priority'  => 30,
    ));

    /////////// header section
    $customize-> add_section('header_section' , array(
        'panel'     => 'theme_options',
        'title'     => 'Header Options',
        'priority'  => 10,
    ));

    /////////// header section field
    $customize-> add_setting('site_logo', array(
        'default'     => '',
        'transport'   => 'refresh',
    ));
    $customize-> add_control(
        new WP_Customize_Image_Control($customize , 'site_logo' , array(
            'label'     => 'Upload your logo',
            'section'   => 'header_section',
            'setting'   => 'site_logo',
        ))
    );

    $customize-> add_setting('sticky_header', array(
        'default'     => 'No',
        'transport'   => 'refresh',
    ));
    $customize-> add_control('sticky_header' , array(
        'section'   => 'header_section',
        'label'     => 'Need sticky header?',
        'type'      => 'select',
        'choices'   => array(
            'Yes'   => 'Yes',
            'No'    => 'No',
        ),
    ));

    ///////////// blog section

    $customize-> add_section('blog_section' , array(
        'panel'     => 'theme_options',
        'title'     => 'Blog Page',
        'priority'  => '20',
    ));

    /////////// blog text
    $customize-> add_setting('blog_text' , array(
        'default'   => "BLOG",
        'transport' => 'refresh',
    ));
    $customize-> add_control('blog_text' , array(
        'section'   => 'blog_section',
        'label'     => 'Add blog page title',
        'type'      => 'text',
    ));
    
    $customize-> add_setting('bg_image' , array(
        'default'   => get_template_directory_uri().'/assets/images/heading-bg.jpg',
        'transport' => 'refresh',
    ));
    $customize-> add_control(
        new WP_Customize_Image_Control($customize , 'bg_image', array(
        'section'   => 'blog_section',
        'label'     => 'Change background image',
        'setting'      => 'bg_image',
        ))
    );

    //////////// Footer Section

    $customize-> add_section('footer_section' , array(
        'panel'     => 'theme_options',
        'title'     => 'Footer Options',
        'priority'  => 30,
    ));
    /////// social
    $customize-> add_setting('footer_widget' , array(
        'default'   => 'No',
        'transport' => 'refresh',
    ));
    $customize-> add_control('footer_widget' , array(
        'section'   => 'footer_section',
        'label'     => 'Need social share options?',
        'type'      => 'select',
        'choices'   => array(
            'Yes'   => 'Yes',
            'No'    => 'No',
        ),
    ));

    $customize-> add_setting('facebook' , array(
        'default'   => 'https://facebook.com/',
        'transport' => 'refresh',
    ));
    $customize-> add_control('facebook' , array(
        'section'   => 'footer_section',
        'label'     => 'Facebook url',
        'type'      => 'text',
    ));

    $customize-> add_setting('twitter' , array(
        'default'   => 'https://twitter.com/',
        'transport' => 'refresh',
    ));
    $customize-> add_control('twitter' , array(
        'section'   => 'footer_section',
        'label'     => 'Twitter url',
        'type'      => 'text',
    ));

    $customize-> add_setting('instagram' , array(
        'default'   => 'https://instagram.com/',
        'transport' => 'refresh',
    ));
    $customize-> add_control('instagram' , array(
        'section'   => 'footer_section',
        'label'     => 'Instagram url',
        'type'      => 'text',
    ));

    $customize-> add_setting('linkedin' , array(
        'default'   => 'https://linkedin.com/',
        'transport' => 'refresh',
    ));
    $customize-> add_control('linkedin' , array(
        'section'   => 'footer_section',
        'label'     => 'Linkedin url',
        'type'      => 'text',
    ));

    $customize-> add_setting('dribbble' , array(
        'default'   => 'https://dribbble.com/',
        'transport' => 'refresh',
    ));
    $customize-> add_control('dribbble' , array(
        'section'   => 'footer_section',
        'label'     => 'Dribbble url',
        'type'      => 'text',
    ));


    $customize-> add_setting('copyright' , array(
        'default'   => 'Copyright 2021 Starblog Theme | Designer: <a href="https://showkatsumon.com" target="_blank">Showkat Sumon</a>',
        'transport' => 'refresh',
    ));
    $customize-> add_control('copyright' , array(
        'section'   => 'footer_section',
        'label'     => 'Copyright text',
        'type'      => 'text',
    ));
}

//////////////// css bg image

add_action('wp_head' , 'bg_image_call');
function bg_image_call(){
    ?>
        <style>
            .page-heading{
                background-image: url(<?php if(empty(get_theme_mod('bg_image'))){
                    echo get_template_directory_uri().'/assets/images/heading-bg.jpg';
                }else{
                    echo get_theme_mod('bg_image');
                } ?>);
            }
        </style>
    <?php
}

if(get_theme_mod('sticky_header') == 'Yes'){
    add_action('wp_head' , function(){ ?>
        <style>
            .background-header {
                top: 0;
                height: 80px;
                position: fixed;
                box-shadow: 0px 1px 10px rgba(0,0,0,0.1);
            }
        </style>
    <?php });
}