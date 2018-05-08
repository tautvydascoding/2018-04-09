<?php

function insertTags(){
  wp_enqueue_style("myStyle1", get_template_directory_uri() . "/libs/bootstrap4/css/bootstrap.css", [], "1.0.0", "all");
  wp_enqueue_style("myStyle2", get_template_directory_uri() . "/libs/normalize/css/normalize.css", [], "1.0.0", "all");
  wp_enqueue_style("myStyle3", get_template_directory_uri() . "/css/styles.min.css", [], "1.0.0", "all");

  wp_enqueue_script("myScript1", get_template_directory_uri() . "/libs/jquery/js/jquery-3.3.1.js", [], "1.0.0", /*bool $in_footer*/ true);
  wp_enqueue_script("myScript2", get_template_directory_uri() . "/libs/popper/js/popper.js", [], "1.0.0", /*bool $in_footer*/ true);
  wp_enqueue_script("myScript3", get_template_directory_uri() . "/libs/bootstrap4/js/bootstrap.js", [], "1.0.0", /*bool $in_footer*/ true);
  wp_enqueue_script("myScript4", get_template_directory_uri() . "/js/main.js", [], "1.0.0", /*bool $in_footer*/ true);
}

add_action('wp_enqueue_scripts', 'insertTags');

add_theme_support('post-thumbnails');
add_theme_support('post-formats',
  array(
    'standard',
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'
  )
);
