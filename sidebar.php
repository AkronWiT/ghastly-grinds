<div class="sidebar">
  <h3 class="title">Categories</h3>
  <?php echo get_the_category_list(); ?>
  <h3 class="title">Recent Posts</h3>
  <ul class="list-items">
  <?php
  	$recent_posts = wp_get_recent_posts();
  	foreach( $recent_posts as $recent ) {
  ?>
    <li><a href="<?php get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"] ?></a></li>
  <?php	} ?>
  </ul>
</div>
