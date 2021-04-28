<?php
get_header();
?>
<main role="main" aria-label="Content">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container pt-5'); ?>>

        <div class="row mt-5">
          <div class="col-12 col-md-3 page-title">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
          <div class="col-12 col-md-9">
            <?php the_content(); ?>
          </div>
        </div>

    </article>
  <?php endwhile; endif; ?>
</main>
<?php
get_footer();
