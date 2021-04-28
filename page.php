<?php
get_header();
?>
<main role="main" aria-label="Content">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('container pt-5 px-0'); ?>>

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
<?php
// TODO: Remove this
// $documents = get_field('documents');
// if($documents) :
//   foreach ($documents as $key => $doc) :
//     $args = array(
//         // 'post_author'           => $user_id,
//         'post_content'          => '',
//         'post_content_filtered' => '',
//         'post_title'            => $doc['name'],
//         'post_excerpt'          => '',
//         'post_status'           => 'publish',
//         'post_type'             => 'documents',
//         'tax_input'             => array(
//           'document_cat' => implode(', ', $doc['category'])
//         ),
//         // 'meta_input'   => array(
//         //   'url' => $doc['url'],
//         //   'file' => $doc['file']
//         // ),
//         // 'comment_status'        => '',
//         // 'ping_status'           => '',
//         // 'post_password'         => '',
//         // 'to_ping'               => '',
//         // 'pinged'                => '',
//         // 'post_parent'           => 0,
//         // 'menu_order'            => 0,
//         // 'guid'                  => '',
//         // 'import_id'             => 0,
//         // 'context'               => '',
//         // 'post_date'             => '',
//         // 'post_date_gmt'         => '',
//     );
//     mapi_write_log($args);
//     $post_id = wp_insert_post($args);
//     if($post_id) :
//       update_field('file', $doc['file'], $post_id);
//       update_field('url', $doc['url'], $post_id);
//     endif;
//   endforeach;
// endif;

get_footer();
