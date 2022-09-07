<?php

/**
 * Template Name:  load more post
 * Template Post Type:post,page,my-post-type;
 */
get_header();
?>

<?php

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'ASC',
  'category_name' => 'first',
  'paged' => 1,
);
$loop = new WP_Query($args);

/**$args = array(
  'post_type' => 'blog',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  'paged' => 1,
  'tax_query' => array(
      array(
          'taxonomy' => 'categories',
          'field'    => 'slug',
          'terms'    => array( 'firstcat' ),
      ),
  ),
);

$loop = new WP_Query( $args );*/
?>
<div class="publication-list" data-pagecount="<?php echo $loop->max_num_pages; ?>">
  <?php
  while ($loop->have_posts()) : $loop->the_post();
    //echo '<pre>';
    //print_r($loop);
  ?>



    <h2><?php echo the_title(); ?></h2>
    <h3>Tags:<?php $posttags = get_the_tags();
              if ($posttags) {
                foreach ($posttags as $tag) { ?>
      <a href="<?= get_tag_link($tag->term_id) ?>">
        <?= $tag->name ?>
      </a>
  <?php }
              } ?>
    </h3>
    <p><?php echo substr(get_the_content(), 0, 40); ?><a href=<?php the_permalink(); ?> title="read more"><h4>Read More...</h4></a></p>
    <h3>Author:<?php echo get_field('author'); ?></h3>
    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>
    <img src="<?php echo $url; ?>" alt="Awesome Image">


  <?php
  endwhile;
  ?>
</div>
<?php wp_reset_postdata(); ?>

<?php
if ($loop->max_num_pages > 1) {
?>

  <button id="load-more">Load more</buttoon>

  <?php } ?>

  <?php
  get_footer();
  ?>