<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot',get_template_directory_uri () .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_nav_menus([
    'PM' => 'primary',
]);

register_sidebar([
    'name' => ' Bd Logo',
    'id' => 'bdlogo',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => ' Hero Title',
    'id' => 'herotitle',
    'before_widget' => '',
    'after_widget' => '',
]); 

register_sidebar([
    'name' => ' Hero Card 1',
    'id' => 'herocard1',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => ' Hero Card 2',
    'id' => 'herocard2',
    'before_widget' => '',
    'after_widget' => '',
]);



register_sidebar([
    'name' => ' Hero Card 3',
    'id' => 'herocard3',
    'before_widget' => '',
    'after_widget' => '',
]);




?>