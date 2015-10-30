<?php the_header(); ?>

<div class="page-default">
  <div class="content">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>

<?php the_footer(); ?>
