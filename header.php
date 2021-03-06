<!DOCTYPE html>
<html>
<head>

<title><?php get_hans_title_tag(); ?></title>

    
<meta name="description" content="<?php the_excerpt(); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
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
<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/beijing-banner-new.jpg" class="icon" alt="Peking index pic" /></a> 
   </div>
 <h2 class="pageid">Welcome to Peking Fun</h2>
  <h1>Peking Fun</h1>
   
<!-- START Wordpress NAVIGATION (Main) -->

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'cssmenu',)); ?>
<!-- END Wordpress NAVIGATION (Main) -->
    
 </header>
    <main>