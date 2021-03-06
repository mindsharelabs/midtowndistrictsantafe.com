<?php
get_header();
?>
<main role="main" aria-label="Content">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container pt-5'); ?>>

        <div class="row mt-5">
          <div class="col-12 col-md-3 offset-0 offset-md-1 page-title">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
          <div class="col-12 col-md-7">
            <p class="lead"><?php the_field('lead_paragraph'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-10 offset-0 offset-md-1   border-4 border-top border-info mt-5 pt-4">
            <?php the_content(); ?>
          </div>
        </div>

    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer();
