<?php get_header(); ?>

<div class="content">
  <div class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post">
        <?php if ( has_post_thumbnail() ) { ?>
	         <img src="<?php the_post_thumbnail(); ?>" class="thumbnail">
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
