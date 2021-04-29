<?php
$notice = get_field('notice_text', 'options');

  echo '<div class="alert alert-info header-alert p-2 mb-0">';
    echo '<div class="container">';
      echo '<div class="row">';
        echo '<div class="col-8 col-md-10">';
          echo ($notice ? $notice : '');
        echo '</div>';
        echo '<div id="language" class="col-4 col-md-2 text-end">';
          echo '<span class="notranslate toggle">Español</span>' . do_shortcode('[gtranslate]');
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';



?>

<header class="header top-header" role="banner">
  <div class="container py-4">
    <div class="row">
      <div class="col-8 col-md-5 col-lg-4 logo pt-1 pb-1 my-auto">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri() . '/img/logo.gif'; ?>" title="<?php bloginfo( 'name' ); ?>" />
        </a>
      </div>

      <div class="col d-none d-md-block my-auto">
        <nav class="desktop header-menu text-right">
          <?php mindblank_nav('header-menu'); ?>

        </nav>
      </div>
      <div class="col-3 offset-1 col-md-1 offset-md-0 my-auto">
        <a href="https://www.santafenm.gov/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/seal.png" id="seal_logo"></a>
      </div>

    </div>
  </div>
</header>
