<?php include ("includes/top.php");?>
<!-- START LEFT Column -->
<main>
<article>
 <div class="flexslider">
	<ul class="slides">
		<li><img alt="" src="images/beijing-night.jpg" /></li>
		<li><img alt="" src="images/beijing-yintai.jpg" /></li>
		<li><img alt="" src="images/forbiddencitynew.jpg" /></li>
		<li><img alt="" src="images/summerpalacenew.jpg" /></li
	></ul>
</div>
</article>
<!-- END Left Column --> 
<!--start right column-->

<div class="mainpartone">
<img alt="" src="images/tiantan1.jpg">
<p>I love cheese, especially boursin dolcelatte. Fromage frais bavarian bergkase macaroni cheese say cheese fromage frais roquefort cheese strings smelly cheese. Stilton feta manchego lancashire cauliflower cheese cheese slices cut the cheese gouda. Monterey jack parmesan paneer bavarian bergkase cheese slices everyone loves danish fontina lancashire. Brie cheese on toast paneer red leicester feta airedale danish fontina rubber cheese. Stinking bishop roquefort goat melted cheese fromage.</p>
</div>
<div class="mainparttwo">
<img alt="" src="images/greatwallnewmeitu.jpg">
<p>Cheese slices stinking bishop mozzarella. Goat blue castello who moved my cheese macaroni cheese pepper jack gouda feta parmesan. Feta ricotta fondue jarlsberg cheddar cheese and biscuits paneer bocconcini. Stinking bishop boursin cheesy grin hard cheese cottage cheese cheesecake mozzarella blue castello. Gouda babybel chalk and cheese manchego red leicester goat edam st. agur blue cheese. Cheesy grin everyone loves cheesy grin dolcelatte smelly cheese jarlsberg cauliflower cheese roquefort. Cottage cheese dolcelatte cauliflower cheese.</p>
</div>
</main>
<!-- Start FlexSlider Code, place just before closing body tag --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- Initialize the slider on the div we named "flexslider" --> 
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

<!-- END Aside our Right Column-->

<?php include ("includes/bottom.php");?>