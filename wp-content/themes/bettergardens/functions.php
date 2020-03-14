<?php



    // Remove p tags from category description

    remove_filter('term_description','wpautop');



    // Add Stylesheet Link

    function for_style_sheet(){

        wp_enqueue_style('style', get_stylesheet_uri());

    }



    add_action('wp_enqueue_scripts', 'for_style_sheet');





    // Register Menus

    register_nav_menus(array(

        'primary' => __('Primary Menu'),

        'footer-menu' => __('Footer Bottom Menu'),

        'mobile-menu' => __('Mobile Menu'),

        // 'sidebar-menu' => __('Sidebar Menu'),

    ));



    // For Supporting Theme with Featured Image

    add_theme_support('post-thumbnails');



    // Update CSS within in Admin

    function admin_style() {

      wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');

    }

    add_action('admin_enqueue_scripts', 'admin_style');    





    // Register Widgets

    if (function_exists('register_sidebar')) {

        register_sidebar(array(

            'name' => 'Sidebar',

            'id'   => 'sidebar',

            'description'   => 'This is the widgetized sidebar.',

            'before_widget' => '<div class="sidebar-box">',

            'after_widget' => '</div></div>',

            'before_title' => '<h6 class="title">',

            'after_title' => '</h6><div class="inner-content">',

        ));

    }



    register_sidebar(array(

        'name' => 'Footer 1',

        'id'   => 'footer1',

        'description'   => 'This is the widgetized sidebar.',

        'before_widget' => '<div class="box sidebar-box">',

        'after_widget' => '</div></div>',

        'before_title' => '<h6 class="title">',

        'after_title' => '</h6><div class="inner-content">',

    ));





    register_sidebar(array(

        'name' => 'Footer 2',

        'id'   => 'footer2',

        'description'   => 'This is the widgetized sidebar.',

        'before_widget' => '<div class="box sidebar-box">',

        'after_widget' => '</div></div>',

        'before_title' => '<h6 class="title">',

        'after_title' => '</h6><div class="inner-content">',



    ));

    // For Services

    register_post_type( 'portfolio',

        array(

        'labels' => array(

        'name'                  => __( 'Portfolio' ),

        'singular_name'         => __( 'Portfolio' ),

        'add_new'               => __( 'Add new Portfolio' ),

        'add_new_item'          => __( 'Add new Portfolio' ),

        'new_item'              => __( 'New Portfolio' ),

        'view_item'             => __( 'View Portfolio' ),

        'search_items'          => __( 'Search Portfolio Items' ),

        'not_found_in_trash'    => __( 'No Portfolio Items Found in Trash' ),

        'has_archive'           => true,

        ),

        'public' => true,

        'supports' => array('title', 'thumbnail', 'editor'),

        )

    );



  // For News

    register_post_type( 'news',

        array(

        'labels' => array(

        'name'                  => __( 'News' ),

        'singular_name'         => __( 'News' ),

        'add_new'               => __( 'Add new News' ),

        'add_new_item'          => __( 'Add new News' ),

        'new_item'              => __( 'New News' ),

        'view_item'             => __( 'View News' ),

        'search_items'          => __( 'Search News Items' ),

        'not_found_in_trash'    => __( 'No News Items Found in Trash' ),

        ),

        'public' => true,

        'supports' => array('title', 'editor', 'thumbnail'),

        )

    ); 

  

?>