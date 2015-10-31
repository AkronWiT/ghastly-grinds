<?php get_header(); ?>

<div class="content">
  <div class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post">
        <?php if ( has_post_thumbnail() ) { ?>
          <?php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
          ?>
	         <img src="<?php echo $thumb_url[0]; ?>" class="thumbnail">
         <?php } ?>
        <div class="post-details">
          <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
