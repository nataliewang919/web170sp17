<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" media="screen" type="text/css" />  
<?php wp_head();?>
    </head>
    
<body <?php body_class(); ?>>   
<header class="mainheader"> 
<div class="headerpic">
   <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/beijing-banner-new.jpg" class="icon" alt="Peking index pic" /></a> 
   </div>
 <h2 class="pageid">Welcome to Peking Fun</h2>
  <h1>Peking Fun</h1>
  <!-- START NAVIGATION (Main) -->
<div id="cssmenu">
  <ul>
 <li class="active"><a href="index.php"><span>Main Page</span></a></li>
     <li><a href="index.php"><span>About</span></a></li>
     <li><a href="index.php"><span>Protfolio</span></a></li>     
     <li><a href="index.php"><span>Blog</span></a></li>
     <li><a href="index.php"><span>Contact</span></a></li>
    </ul>
  </div>
    <!-- END NAVIGATION (Main) -->  
   
<!-- START Wordpress NAVIGATION (Main) -->
<!--<php wp_nav_menu(array('theme_location'=>'main=menu','container'=>'div','cintainer_id'=>'cssmenu',)); ?>
<!-- END Wordpress NAVIGATION (Main) -->
    
 </header>

<!-- start main contents -->
<main>
<article class=mainpage>
<div class="indexpic">
  <img alt="indexpic" src="<?php bloginfo('template_directory'); ?>/images/newbeijing.png">
</div>
<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
</article>
<!-- end main contents --> 

<!-- Begin Sidebar -->
    <aside class="sidebar">  
    <div>
    <h2>Sidebar</h2>  
    <p>The rabbit-hole went straight on like a tunnel for some way, and then dipped suddenly down, so suddenly that Alice had not a moment to think about stopping herself before she found herself falling down a very deep well.</p>
    <p>There was nothing so very remarkable in that; nor did Alice think it so very much out of the way to hear the Rabbit say to itself, `Oh dear! Oh dear! I shall be late!' (when she thought it over afterwards</p>
   <p>over afterwards, it occurred to her that she ought to have wondered at this, but at the time it all seemed quite natural); but when the Rabbit actually took a watch out of its waistcoat-pocket, and looked at it, and then hurried on, Alice started to her feet, for it flashed acro.</p>
    </div>    
</aside>
<!-- End Sidebar -->

</main>
<!--<footer>
  <p><a href="http://validator.w3.org/check/referer">Valid HTML5</a> 
~ <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>
~ <a href="disclaimer.php">Disclaimer Page</a>     
~ &copy; 2017 Han Wang. All Rights Reserved. </p>
</footer>-->
<?php wp_footer(); ?>
</body>
</html>
