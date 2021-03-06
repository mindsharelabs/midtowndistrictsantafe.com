<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' : ';
        } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#d94d42">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#e6e6e6">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/browserconfig.xml">
    <meta name="theme-color" content="#D94D42">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-panel">
  <?php
  if(wp_is_mobile()) :
    echo '<div class="mobileHeader">';
      echo '<nav id="mobileMenu" class="mobile-nav">';


        mindblank_nav('mobile-menu');

        echo '<div class="mobile-logo my-4 mx-auto w-25">';
          echo '<a href="https://www.santafenm.gov/" target="_blank"><img src="' . get_bloginfo('template_directory') . '/img/seal.png" id="seal_logo"></a>';
        echo '</div>';
      echo '</nav>';

      echo '<nav id="mobileMenuToggle" class="menu-toggle">';
        include get_template_directory() . '/img/menuToggle.svg';
      echo '</nav>';
    echo '</div>';


  endif;

include 'layout/top-header.php';
if(is_search()) :
  include 'layout/search-header.php';
elseif(is_404()) :

elseif(is_archive()) :
  include 'layout/archive-header.php';
else :
  include 'layout/page-header.php';
endif;
