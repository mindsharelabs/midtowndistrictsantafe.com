
<article id="post-<?php the_ID(); ?>" <?php post_class('row mb-3'); ?>>


    <?php
    if(has_post_thumbnail( )) :
      echo '<div class="col-4">';
        the_post_thumbnail( get_the_id(), 'loop-thumb');
      echo '</div>';
    endif;
    ?>
    <div class="col-8 card-content bg-info">
      <span class="posted-date mb-2">
        <small class="text-muted">
          <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
        </small>
		  </span>
      <h2 class="blog-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
      <a href="<?php the_permalink(); ?>" class="blog-button">Read More <i class="far fa-arrow-right"></i></a>
    </div>
    <div class="red-stripe"></div>
</article>
