<?php
//スタイルシートの読み込み
function enqueue_multiple_styles() {
  // styles.css を読み込む
  wp_enqueue_style(
    'css-common',
    get_stylesheet_directory_uri() . '/assets/css/styles.css',
    array()
  );
  //CDNからswiper cssの読み込み
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    array('css-common')
  );
}
add_action('wp_enqueue_scripts', 'enqueue_multiple_styles');

//jsファイル読み込み
function add_my_scripts() {
  // WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');
  // jQuery を CDN から読み込む
  wp_enqueue_script(
    'jquery',
    'https://code.jquery.com/jquery-3.7.1.min.js',
    array(), // 依存なし
    '3.7.1', // バージョン
  );
  wp_deregister_script('Swiper');
  // swiper を CDN から読み込む
  wp_enqueue_script(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array('jquery'), // 依存なし
    true
  );
  
  // main.js の読み込み
  wp_enqueue_script(
    'main-script',
    get_theme_file_uri('/assets/js/main.js'),
    array('swiper'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');
