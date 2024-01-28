<?php

function my_enqueue_styles() {
  wp_enqueue_style('destyle',get_template_directory_uri() . '/asset/css/destyle.css', array(), false, 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/asset/css/style.css', array('destyle'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');