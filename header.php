<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <!-- OGP -->
  <meta property="og:url" content="<?php echo get_permalink(); ?>"> <!-- //ページのURLを設定 -->
  <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>"> <!-- ページのタイトル -->
  <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>"> <!-- ページのディスクリプション -->
  <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>"> <!-- サイトの名前 -->
  <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>"> <!-- OGP画像 -->
  <meta property="og:locale" content="ja_JP"> <!-- ページの国コード -->
  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Import CSS -->
  <link rel="stylesheet" href="<?php get_template_directory_uri()?>/assets/css/styles.css">
  <!-- Import JS/jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
          crossorigin="anonymous">
  </script>
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <!-- ===== header ===== -->
    <header>
    </header>