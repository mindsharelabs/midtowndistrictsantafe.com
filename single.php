<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post(); ?>
  <main role="main" aria-label="Content">
    <article id="post-<?php the_ID(); ?>" <?php post_class('container pt-5 single'); ?>>

      <div class="row">
        <div class="col-12 col-md-2">
          <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php echo get_the_title( get_option( 'page_for_posts' ) ); ?>">
            <i class="arrow fa fa-angle-double-left"></i> Back
          </a>
        </div>
        <div class="col-12 col-md-8 offset-0">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>

    </article>
  </main>
<?php endwhile; endif;

get_footer();
