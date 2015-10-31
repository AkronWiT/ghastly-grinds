<?php get_header(); ?>

<div class="content">
  <div class="posts">
    <!-- POST 1 -->
    <div class="post">
      <?php if ( has_post_thumbnail() ) { ?>
         <img src="<?php the_post_thumbnail(); ?>" class="thumbnail">
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
