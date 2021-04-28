<?php
if (has_post_thumbnail()) :
  if(wp_is_mobile()) :
    $f_image = get_the_post_thumbnail_url( get_option( 'page_for_posts' ), 'page-header');
  else :
    $f_image = get_the_post_thumbnail_url( get_option( 'page_for_posts' ), 'page-header-short');
  endif;
else :
  $f_image = null;
endif;

if ( is_front_page() && is_home() ) :
  // Default homepage
  $title = get_bloginfo('name');
  $headline = get_field('headline');
elseif ( is_front_page()) :
  // Static homepage
  $title = false;
  $headline = false;
elseif ( is_home()) :
  // Blog page
  $title = get_the_title( get_option( 'page_for_posts' ) );
  $headline = get_field('headline', get_option( 'page_for_posts' ));
elseif ( is_singular( array('post') ) ) :
  $title = get_the_title();
  $headline = get_field('headline', get_option( 'page_for_posts' ));
else :
  // Everything else
  $title = get_the_title(get_the_id());
  $headline = get_field('headline');
endif;

if($title || $headline) :
echo '<section class="brand" ' . ($f_image ? 'style="background-image:url(' . $f_image . ');"' : '') . '>';
  echo '<div class="container py-5">';
    echo '<div class="row">';
      echo '<div class="col-12 my-auto ' . ($headline ? 'py-5' : '') . '">';

        if($headline) :
          echo '<div class="headline">';
            echo '<h1 class="text-white">' . $headline . '</h1>';
          echo '</div>';
        else :
          echo '<h1 class="page-title text-white">' . $title . '</h1>';
        endif;



      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</section>';
endif;
