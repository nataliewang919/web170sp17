<?php get_header(); ?>

<!-- start main contents -->
<article class=mainpage>
<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<article id="article-<?php the_ID(); ?>" class="article">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
<p><?php echo get_the_excerpt(); ?><br /><a href="<?php the_permalink(); ?>">Full Story&nbsp;&raquo;</a></p>
</article>
<?php endwhile; endif; ?>
    <small>index.php</small>
</article>
<!-- end main contents --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>
