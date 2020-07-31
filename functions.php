<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

if( function_exists('register_sidebar') ) {
  register_sidebar( array(
    'name' => 'Header right',
    'id' => 'header-right',
    'before_widget' => '<div class="%2$s">',
    'after_widget' => '</div>'
  ));
}
