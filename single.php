<?php get_header(); ?>

<div class="content">
  <div class="posts">
    <!-- POST 1 -->
    <div class="post">
      <?php if ( has_post_thumbnail() ) { ?>
        <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
        ?>
         <img src="<?php echo $thumb_url[0]; ?>" class="thumbnail">
       <?php } ?>
      <div class="post-details">
        <h3 class="title"><?php the_title(); ?></h3>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
