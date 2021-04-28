<?php get_header();?>

<main role="main" aria-label="Content">
  <section <?php post_class('container'); ?>>
    <div class="row mt-5">
      <div class="col-12 col-md-3 offset-0 offset-md-1 page-title">
        <h1 class="page-title"><?php the_archive_title(); ?></h1>
        <div class="filter">
          <?php echo facetwp_display( 'facet', 'document_cat' ); ?>
        </div>
      </div>
      <div class="col-12 col-md-7">

        <?php
        while (have_posts()) : the_post();
          get_template_part('loop-documents');
        endwhile;
        ?>
      </div>
    </div>

    <div class="row text-center">

      <?php echo facetwp_display( 'facet', 'document_pagination' ); ?>
    </div>

    </div>
  </section>
</main>
<?php
get_footer();
