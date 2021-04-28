<?php
$archived = get_field('archive_post');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row mb-3 ' . ($archived ? 'archived' : '')); ?>>
    <?php
    if(has_post_thumbnail( )) :
      echo '<div class="col-4">';
      $args = array();
        if($archived) :
          $args['class'] = 'blackandwhite';
        endif;
        the_post_thumbnail('loop-thumb', $args);
      echo '</div>';
    endif;
    ?>
    <div class="col-8 card-content">
      <span class="posted-date mb-2">
        <small class="text-muted ">
          <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
        </small>
		  </span>
      <h2 class="blog-title">
        <?php if($archived) : echo 'Archived: '; endif; ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
      <a href="<?php the_permalink(); ?>" class="blog-button">Read More <i class="fas fa-angle-double-right"></i></a>
    </div>
    <div class="red-stripe"></div>
</article>
