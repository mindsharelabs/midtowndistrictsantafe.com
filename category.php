<?php get_header();?>

<main role="main" aria-label="Content">
  <section <?php post_class('container blog'); ?>>
    <div class="row mt-5">
      <?php
      echo '<div class="col-12 col-md-3 page-title">';
        echo '<h1 class="page-title">' . single_cat_title('', false) . '</h1>';
        echo '<div class="cat-list">';
          wp_list_categories(array(
            'title_li' => '',
            'style' => ''
          ));
        echo '</div>';
      echo '</div>';
      echo '<div class="col-12 col-md-9">';
      while (have_posts()) : the_post();
        get_template_part('loop-post');
      endwhile;
      echo '</div>';
      ?>
    </div>
    <?php get_template_part('pagination'); ?>
    </div>
  </section>
</main>
<?php
get_footer();
