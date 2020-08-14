<?php

get_template_part('/inc/halim-options');

function halim_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','sliders', 'team', 'testimonials', 'portfolio'));
    load_theme_textdomain('halim', get_template_directory_uri().'/languages');

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'halim')
    ));
}
add_action('after_setup_theme', 'halim_setup_theme');

function halim_css_js_enqueue(){

    // CSS Load
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
    wp_enqueue_style('magnific-css', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style('owlcarousel-css', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all' );
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('style-css', get_stylesheet_uri());

    // JS Load
    wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('imageloaded-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('counter-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('waypoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','halim_css_js_enqueue');

// Custom Posts

function halim_custom_posts(){

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Slides', 'halim'),
            'singular_name' => __('Slider', 'halim')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));

    // Services Custom Post
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'halim'),
            'singular_name' => __('Service', 'halim')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'custom-fields')
    ));

   // Team Custom Post
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' => __('Team', 'halim')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes')
    ));

    // Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim')
        ),
        'public' => true,
        'supports' => array('thumbnail', 'custom-field', 'page-attributes')
    ));

    // Gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallerys', 'halim'),
            'singular_name' => __('Gallery', 'halim')
        ),
        'public' => true,
        'supports' => array('title', 'custom-field', 'page-attributes')
    ));

    // Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'halim'),
            'singular_name' => __('Portfolio', 'halim')
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes')
    ));

    // Portfolio Taxonomy

    register_taxonomy('portfolio-cat', 'portfolio',array(
        'labels' => array(
            'name' => __('Categories', 'halim'),
            'singular_name' => __('Category', 'halim')
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}
add_action('init', 'halim_custom_posts');


// Halim Custom Widgets

function halim_widgets(){

    // Sidebar
    register_sidebar(array(
        'name' => __('Main Sidebar','halim'),
        'id' => 'main_sidebar',
        'description' => __('Main Sidebar for Blog Page', 'halim'),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 1
    register_sidebar(array(
        'name' => __('Footer Sidebar 1','halim'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Sidebar 2
    register_sidebar(array(
        'name' => __('Footer Sidebar 2','halim'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 3
    register_sidebar(array(
        'name' => __('Footer Sidebar 3','halim'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 4
    register_sidebar(array(
        'name' => __('Footer Sidebar 4','halim'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for Showing Widget', 'halim'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'halim_widgets');


//Comment fields Order

function halim_comment_filed( $fields ) {
    $comment = $fields['comment'];
    $author = $fields['author'];
    $email = $fields['email'];
    $url = $fields['url'];
    $cookies = $fields['cookies'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    
    $fields['author'] = $author;
    $fields['email'] = $email;
    $fields['url'] = $url;
    $fields['comment'] = $comment;
    $fields['cookies'] = $cookies;
    
    return $fields;
}
add_filter( 'comment_form_fields', 'halim_comment_filed' );

require_once get_template_directory().'/inc/halim-activation.php';
