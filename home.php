<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" media="screen" type="text/css" />  
 
<!-- Start FlexSlider Code, place just before closing body tag --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script> 

<!-- Initialize the slider on the div we named "flexslider"-->
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide", // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
      });
    });
</script> 

<!-- Optional FlexSlider Additions --> 
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- End FlexSlider Code -->
<?php wp_head();?>
    </head>
   
<body <?php body_class(); ?>>
<header class="mainheader"> 
<div class="headerpic">
  <a href="home.php"><img src="<?php bloginfo('template_directory'); ?>/images/beijing-banner-new.jpg" class="icon" alt="Peking index pic" /></a>
   </div>
 <h2 class="pageid">Welcome to Peking Fun</h2>
  <h1>Peking Fun</h1>
  
   <!-- START NAVIGATION (Main)
<div id="cssmenu">
  <ul>
 <li class="active"><a href="index.php"><span>Main Page</span></a></li>
     <li><a href="index.php"><span>About</span></a></li>
     <li><a href="index.php"><span>Protfolio</span></a></li>     
     <li><a href="index.php"><span>Blog</span></a></li>
     <li><a href="index.php"><span>Contact</span></a></li>
    </ul>
  </div>
     END NAVIGATION (Main) -->  
   
<!-- START Wordpress NAVIGATION (Main) -->
<?php wp_nav_menu(array('theme_location'=>'main=menu','container'=>'div','cintainer_id'=>'cssmenu',)); ?>
<!-- END Wordpress NAVIGATION (Main) -->
 </header>

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
<p>I love cheese, especially everyone loves cheese and biscuits. Cream cheese cheesy grin taleggio macaroni cheese port-salut brie ricotta say cheese. Cauliflower cheese goat halloumi everyone loves cut the cheese halloumi squirty cheese cut the cheese. Mascarpone everyone loves red leicester blue castello paneer cheese slices fromage frais squirty cheese. Cheddar manchego say cheese.</p>

</div>

<div class="mainparttwo">
<img alt="" src="<?php bloginfo('template_directory'); ?>/images/greatwallnewmeitu.jpg">
<p>I love cheese, especially everyone loves cheese and biscuits. Cream cheese cheesy grin taleggio macaroni cheese port-salut brie ricotta say cheese. Cauliflower cheese goat halloumi everyone loves cut the cheese halloumi squirty cheese cut the cheese. Mascarpone everyone loves red leicester blue castello paneer cheese slices fromage frais squirty cheese. Cheddar manchego say cheese.</p>
    
</div>
  <small>home.php</small>  
</main>
<footer>
  <p>~ &copy; 2017 Han Wang. All Rights Reserved.~</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>

