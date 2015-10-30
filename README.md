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
- Add pages for `Home`, `Contact` and `Our Beans`
- Add a main nav. `Appearance` -> `Menus`
- Configure permalinks `Settings` -> `Permalinks` and check `Post name`

## STATIC TO DYNAMIC
- Rename `home.html` to `home.php`
- Rename `posts.html` to `index.php`
- Move header code into `header.php`
- Replace all headers with WP tag `<?php the_header(); ?>`
- Edit `header.php` and use WP tag `<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">` to replace style.css line
- Move footer code into `footer.php`
- Replace all footer code with WP tag `<?php the_footer(); ?>`
- Inert `<?php wp_head(); ?>` into `header.php`
- Rename `beans.html` to `page.php`
- Delete `contact.html`
- Replace content in `page.php` with WordPress page loop:
```
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
```
- Replace `h2.page-title` content with `<?php the_title(); ?>`
- Rename `post.html` to `single.php`
- Add CSS File Header
```
/*!
  Theme Name: Ghastly Grinds
  Description: Custom theme for WordPress Workshop
  Author: Akron Women in Tech
  Version: 1.0
*/
```
