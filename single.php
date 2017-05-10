<?php get_header(); ?>

<!-- start main contents -->

<article class=mainpage>

<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<article id="article-<?php the_ID(); ?>" class="article">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small>
<?php the_content(); ?>
    </article>
<?php endwhile; endif; ?>
    <small>single.php</small>
</article>
<!-- end main contents --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>
