<?php

$theme_uri = get_template_directory_uri();

// CSSファイルの読み込み
function add_stylesheet() {
  wp_register_style('destyle', $theme_uri . '/wp-content/themes/ryoto_hiji/asset/css/destyle.css', array(), false, 'all');
  wp_enqueue_style('style', $theme_uri . '/wp-content/themes/ryoto_hiji/asset/css/style.css', array('destyle'), false, 'all');
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// JSファイルの読み込み
function add_script() {
  wp_enqueue_style('js', $theme_uri . '/wp-content/themes/ryoto_hiji/asset/js/main.js', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'add_script');

