<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first thema</title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equit="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body>
    <header>
      <div class="flex-box">
        <div>
          <h1>
            <a href="<?php echo esc_url( site_url() ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            </a>
          </h1>
        </div>
        <div class="searchbox">
          <?php get_search_form(); ?>
        </div>
      </div>
      <?php wp_nav_menu( $args ); ?>
    </header>
