
<article id="post-<?php the_ID(); ?>" <?php post_class('row mb-3'); ?>>

  <?php
  $link = get_field('url');
  $file = get_field('file');
  $cats = wp_get_post_terms( get_the_id(), 'document_cat');
  echo '<a href="' . ($link ? $link : $file['url']) . '" target="_blank" ' . ($link ? '' : 'download') . '>';
    echo '<h2 class="document-title">' . get_the_title() . '</h2>';
  echo '</a>';
  the_excerpt();

  if($cats) :
    echo '<div class="mb-3">';
    echo '<small>Categorized in: </small>';
    foreach ($cats as $key => $cat) :
      echo '<small>' . $cat->name . '</small>';
      if(next($cats)) :
        echo ', ';
      endif;
    endforeach;
    echo '</div>';
  endif;
  ?>
</article>
