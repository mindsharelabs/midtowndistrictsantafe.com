<?php
echo '<section class="archive-header"  style="background-image:url(' . get_template_directory_uri() . '/img/site.jpg)">';

  echo '<div class="container py-5">';
    echo '<div class="row">';
      echo '<div class="col-12 my-auto py-5">';
        echo '<div class="headline">';
          echo '<h1 class="text-white">' . get_the_archive_title() . '</h1>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';

echo '</section>';
