<?php

// TODO view moreのリンク先設定(他のページを作成してから)
// TODO Contactフォームで作成したWPプラグインを編集
// TODO 価格、文言、画像など決める必要のあることを決める

// CSSファイルの読み込み
function add_stylesheet() {
  $theme_uri = get_template_directory_uri();
  wp_enqueue_style('destyle', $theme_uri . '/asset/css/destyle.css', array(), false, 'all');
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), false, 'all');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), false, 'all');
  wp_enqueue_style('InriaSerif', 'https://fonts.googleapis.com/css2?family=Inria+Serif:wght@700&display=swap', array(),null, false, 'all');
  wp_enqueue_style('SourceCodePro', 'https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap', array(),null, false, 'all');

  wp_enqueue_style('style', $theme_uri . '/asset/css/style.css', array('destyle','slick','slick-theme','InriaSerif','SourceCodePro'),'1.0.3', false, 'all');
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
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);
  wp_enqueue_script('theme-main-js', $theme_uri . '/asset/js/main.js', array('jquery','progressbar','gsap-min','gsap-scrollToPlugin','gsap-scrollTrigger','slick-js'),'1.0.0', true, 'all');
}
add_action('wp_enqueue_scripts', 'add_script');

