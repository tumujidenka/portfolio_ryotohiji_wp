<?php

// CSSファイルの読み込み
function add_stylesheet() {
  $theme_uri = get_template_directory_uri();
  wp_enqueue_style('destyle', $theme_uri . '/asset/css/destyle.css', array(), false, 'all');
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), false, 'all');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), false, 'all');
  wp_enqueue_style('style', $theme_uri . '/asset/css/style.css', array('destyle','slick','slick-theme'),'1.0.1', false, 'all');
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// JSファイルの読み込み
function add_script() {
  $theme_uri = get_template_directory_uri();
  wp_enqueue_script('jquery');
  wp_enqueue_script('progressbar','https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js',array(),true,'all');
  wp_enqueue_script('gsap-min', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), true, 'all');
  wp_enqueue_script('gsap-scrollToPlugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js', array(), true, 'all');
  wp_enqueue_script('gsap-scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array(), true, 'all');

  wp_enqueue_script('theme-main-js', $theme_uri . '/asset/js/main.js', array('jquery','progressbar','gsap-min','gsap-scrollToPlugin','gsap-scrollTrigger'),'1.0.0', true, 'all');
}
add_action('wp_enqueue_scripts', 'add_script');

