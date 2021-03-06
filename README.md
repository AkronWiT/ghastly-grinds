# Workshop: Create a Custom WordPress Theme

## SYSTEM REQUIREMENTS

### Minimum Windows requirements:
- Intel x86 or compatible processor
- Minimum of 256 MB RAM
- Minimum of 150 MB hard drive space
- A 32-bit or 64-bit Windows operating system such as Windows 2000, XP, Vista, 7, 8 or
- Windows Server 2003, 2008 or 2012
- TCP/IP protocol support

### Minimum Mac requirements:
- min. Mac OS X 10.6.6 & 64-Bit processor (Intel)

## SOFTWARE
- [MAMP](https://www.mamp.info)
- [Atom Editor](http:/atom.io)
- [GitHub Desktop](https://desktop.github.com/)

## INSTALL
- Install MAMP
- Install Atom
- Install GitHub Desktop

## SETUP WORKSPACE
- Clone static website files from repo (https://github.com/AkronWiT/ghastly-grinds)
- Open or drag top level folder `ghastly-grinds` into Atom
- Use the “Extras” in MAMP to install WordPress
- Set URL to (http://ghastly-grinds.local:8888)
- Set Root Directory to cloned repo

## WORDPRESS EDUCATIONS
- Navigate [/wp-admin](http://ghastly-grinds.local:8888/wp-admin)
- Click `Pages` from sidebar and Delete `Sample page`
- Add pages for `Home`, `Our Beans`, `Boo-log` and `Contact`
- Add a main nav. `Appearance` -> `Menus`
- Configure permalinks `Settings` -> `Permalinks` and check `Post name`
- Set Home and Blog pages `Settings` -> `Reading` and set `Front page` to Home and Posts page to `Boo-log`

## STATIC TO DYNAMIC
- Rename `posts.html` to `index.php`
- Zip up `ghastly-grinds` Directory
- Upload `ghastly-grinds` into WordPress theme
- Traverse WordPress files and drag `ghastly-grinds` into Atom Editor
- Rename `home.html` to `page-home.php`
- Move header code into `header.php`
- Replace all headers with WP tag `<?php get_header(); ?>`
- Edit `header.php` and use WP tag `<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">` to replace style.css line
- Edit `header.php` and replace menu markup with  
```
<?php wp_nav_menu( array('menu' => 'main', 'container' => false) ) ?>
```
- Edit `header.php` and replace title content with  
```
<?php bloginfo( 'name' ); ?> <?php wp_title(); ?>
```
- Insert `<?php wp_head(); ?>` into `header.php` within the `<head>` tag
- Move footer code into `footer.php`
- Replace all footer code with WP tag `<?php get_footer(); ?>`
- Inside `footer.php` add `<?php wp_footer(); ?>` just before the closing body tag
- Rename `beans.html` to `page.php`
- Delete `contact.html`
- Replace content in `page.php` with WordPress page loop:  
```
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
```
- Replace `h2.page-title` content with `<?php the_title(); ?>`
- Add CSS File Header  
```
/*!
  Theme Name: Ghastly Grinds
  Description: Custom theme for WordPress Workshop
  Author: Akron Women in Tech
  Version: 1.0
*/
```
- Create a `functions.php` file
- Inside of `functions.php` lets add theme support for thumbnail images & menus
```
<?php
// Add Thumbnail Support
add_theme_support( 'post-thumbnails' );

// Add Menu Support
add_theme_support('menus');
```
- Edit `index.php` and setup WordPress loop function for posts  
```
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Post 1 Markup goes here! -->
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
```
- In `index.php` replace content with `<?php the_excerpt(); ?>`
- In `index.php` set link to article in loop to `<?php the_permalink() ?>`
- In `index.php` replace post title with `<?php the_title(); ?>`
- In `index.php` replace post image with  
```
<?php if ( has_post_thumbnail() ) { ?>
  <?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
  ?>
   <img src="<?php echo $thumb_url[0]; ?>" class="thumbnail">
 <?php } ?>
 ```
- In `index.php` delete other 4 post placeholders
- Move sidebar markup into a new file named `sidebar.php`
- Replace sidebar markup with WP tag `<?php get_sidebar(); ?>`
- Replace category `<UL>` markup with
```
<?php echo get_the_category_list(); ?>
```
- Replace recent post `<UL>` markup with
```
<?php
  $recent_posts = wp_get_recent_posts();
  foreach( $recent_posts as $recent ) {
?>
  <li><a href="<?php get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"] ?></a></li>
<?php	} ?>
```
- Rename `post.html` to `single.php`
- In `single.php` replace post image with  
```
<?php if ( has_post_thumbnail() ) { ?>
  <?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
  ?>
   <img src="<?php echo $thumb_url[0]; ?>" class="thumbnail">
 <?php } ?>
 ```
- In `single.php` replace post title with `<?php the_title(); ?>`
- In `single.php`
- In `single.php` replace content with  
```
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
```
- In `post.php` replace sidebar markup with `<?php get_sidebar(); ?>`
- Fix Hero background image path by setting path to `../../ghastly-grinds/css/modules/hero.css` on line 10
- Create CSS module `/css/modules/wordpress.css` and add WordPress core styling found here: (https://codex.wordpress.org/CSS)
- Add new module to `style.css` on line 29 `@import url('css/modules/wordpress.css');`
- In `page-home.php` fix image paths by appending WordPress theme tag to path `<?php bloginfo('template_url'); ?>/`

## TROUBLESHOOTING
- If you receive the error `The package could not be installed. The style.css stylesheet doesn't contain a valid theme header.`, you need to add the CSS File Header to your `style.css` folder before zipping and upload.
```
/*!
  Theme Name: Ghastly Grinds
  Description: Custom theme for WordPress Workshop
  Author: Akron Women in Tech
  Version: 1.0
*/
```
