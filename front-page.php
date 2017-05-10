<?php get_header(); ?>

<!-- start main contents -->

<!-- START flexslider -->
<main>
<article>
 <div class="flexslider">
	<ul class="slides">
		<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/beijing-night.jpg" /></li>
		<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/beijing-yintai.jpg" /></li>
		<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/forbiddencitynew.jpg" /></li>
		<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/summerpalacenew.jpg" /></li
	></ul>
</div>
</article>
<!-- END flexslider --> 

<!--start contents-->
<div class="mainpartone">
<img alt="" src="<?php bloginfo('template_directory'); ?>/images/tiantan1.jpg">
    <h2>About Me</h2>
<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<article id="article-<?php the_ID(); ?>" class="article">
    <?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
     <small>front-page.php</small>

</div>

<div class="mainparttwo">
<img alt="" src="<?php bloginfo('template_directory'); ?>/images/greatwallnewmeitu.jpg">
<h2>Latest News</h2>
    <ul>
<?php rewind_posts(); ?>
<?php query_posts(array('posts_per_page'=>'4','category_name'=>'news')); ?>
<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small> 
<?php endwhile; endif; ?>  
  </ul>
   
<h2>Latest Article</h2>
    <ul>
<?php rewind_posts(); ?>
<?php query_posts(array('posts_per_page'=>'4','category_name'=>'articles')); ?>
<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small><br />     
<?php endwhile; endif; ?>  
    </ul>
</div>
<!-- end main contents --> 


<?php get_footer(); ?>
