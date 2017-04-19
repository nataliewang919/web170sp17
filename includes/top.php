<?php include ("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$myTitle?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/styles.css" />
<link href="css/flexslider.css" rel="stylesheet" media="screen" type="text/css" />
</head>
<body>
<header class="mainheader"> 
<div class="headerpic">
   <a href="home.php"><img src="images/<?=$myPic?>" class="icon" alt="<?=$myAlt?>" /></a>
   </div>
 <h2 class="pageid"><?=$myPageID?></h2>
  <h1>Peking Fun</h1>
  <!-- START NAVIGATION (Main) -->
<div id="cssmenu">
  <ul>
  <li class="active"><a href="home.php"><span>Main Page</span></a></li>
     <li><a href="main.php"><span>Beijing History</span></a></li>
     <li><a href="main.php"><span>Beijing Tour</span></a></li>
     <li><a href="main.php"><span>Things To Do</span></a>
      <li><a href="main.php"><span>Fun Places</span></a></li>
      <li><a href="main.php"><span>Great Restaurants</span></a></li>
     <li><a href="main.php"><span>Contact Me</span></a></li>
    </ul>
  </div>
    <!-- END NAVIGATION (Main) --> 
 </header>
