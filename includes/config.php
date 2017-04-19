<?php
/*
config.php - will allow us to swap html pieces dynamically
include this file at the top 'top.php'!
*/

//Here are the keys for the server: web-students.com
$siteKey = "6LflcSQTAAAAANGnwfCWIqXbC-BAdFRJyYp2-hs4";
$secretKey = "6LflcSQTAAAAALGeg7ZB3VZhXHkwoLn9i13sos8t";

//place URL & labels in the variable/array here for navigation:
$nav1['fp.php'] = "Main Page";
$nav1['alice.php'] = "Alice";
$nav1['cat.php'] = "Cat";
$nav1['queen.php'] = "The Queen";
$nav1['rabbit.php'] = "The Rabbit";
$nav1['hatter.php'] = "The Hatter";
$nav1['gallery.php'] = "The Gallery";

//this line below identifies the current page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

/* below we can create 'case' statements to accommodate
 unique data items (title, a page id and an image) that will
reside in the 'top.php' file
*/
switch(THIS_PAGE)
{
  case "home.php":
  $myTitle = "Welcome to Peking Fun!";
  $myPic = "beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Welcome to Peking Fun!";
  break;
  
  case "main.php":
  $myTitle = "About Beijing page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Old and New Beijing!";
  break; 
  
  case "main.php":
  $myTitle = "thingtodo.page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Things to do in Beijing!";
  break; 
  
  case "main.php":
  $myTitle = "Beijing Tour Page";
   $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = " Tour Recommendation in Beijing";
  break;
  
  case "main.php":
  $myTitle = "Travel Communities page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Share your thoughts with me";
  break;
  
  case "main.php":
  $myTitle = "Fun Places page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Come to see fun places in Beijing";
  break;
  
  case "main.php":
  $myTitle = "Restaurant page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Oh Beijing Famous Restaurant";
  break;            

  case "main.php":
  $myTitle = "Disclaimer page";
  $myPic ="beijing-banner-new.jpg";
  $myAlt = "Peking index pic";
  $myPageID = "Disclaimer/Privacy Notice";
  break;
  //fallback values for undefined pages
  default:
  $myTitle = THIS_PAGE; #the file name is unique
  $myPic = "alice-tea-party-small.png";
  $myAlt = "Alice Tea Party"; 
  $myPageID = "Welcome!";
}
//--------------END CONFIG AREA --------------------------------
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//current page - add class reference
	    	$myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


#uncomment to test:
/*
echo 'THIS_PAGE is: ' . THIS_PAGE . '<br />';
echo '$myTitle is: ' . $myTitle . '<br />';
echo '$myPageID is: ' . $myPageID . '<br />';
echo '$myPic is: ' . $myPic . '<br />';
echo 'Nav:<br />';
echo makeLinks($nav1);
die;
*/

/*

saved below as the original HTML for the nav:

 <nav class="nav">
	<ul>
		<li class="current"><a href="index.php">Welcome</a></li>
		<li><a href="alice.php">About Alice</a></li>
		<li><a href="queen.php">The Queen</a></li>
		<li><a href="madhatter.php">The Mad Hatter</a></li>
		<li><a href="gallery.php">The Gallery</a></li>
	</ul>
  </nav>

*/


?>