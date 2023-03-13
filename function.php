<?php 
function_mytheme_support(){

    // コアブロックの追加のCSSを読み込み
    add_theme_support( 'wp-block-styles' );

    // テーマのCSS（style.css）をエディターに読み込み
    add_editor_style( 'style.css' );

}
add_action('after_setup_theme','mytheme_support');

function mytheme_enqueue(){

    // テーマのCSS(style.css)をフロントに読み込み
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_theme_file_path( 'style.css' ))
    );
}
add_action( 'wp_enqueue_scripts','mytheme_enqueue');