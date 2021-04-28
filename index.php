<?php
get_header();
?>
<main role="main" aria-label="Content" <?php post_class(); ?>>
  <?php


  echo '<section class="container blog">';
    echo '<div class="row pt-5">';
      if(have_posts()) :
        echo '<div class="col-12 col-md-3 page-title">';
          echo '<h1 class="page-title">' . get_the_title(get_option('page_for_posts', true)) . '</h1>';
          echo '<div class="cat-list">';
            wp_list_categories(array(
              'title_li' => '',
              'style' => ''
            ));
          echo '</div>';
        echo '</div>';
        echo '<div class="col-12 col-md-9">';
          while(have_posts()) : the_post();
            get_template_part( 'loop-post' );
          endwhile;
        echo '</div>';
      else :
        echo '<h3 class="text-center">There\'s nothin\' here.</h3>';
      endif;
    echo '</div>';
    get_template_part('pagination');
  echo '</section>';
  ?>
</main>
<?php
get_footer();
