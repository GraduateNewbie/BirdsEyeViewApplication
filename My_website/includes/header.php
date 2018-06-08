<?php 

    include("db.php");//connection to the specified database using code in connect.php file, this is done rather than adding the code to all pages (time saving)
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Birds Eye View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <link href="css/blog.css" rel="stylesheet" type="text/css" media="all" />end of row -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.navbar-nav{
	float: none;
	text-align:center;


}
.navbar-nav li{
	display:inline-block;
	float: none;
	font-size: 20px;
	padding-top: 15px;
}


	
h1{

	text-align:center;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 15px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #5C8E3A;
  color: #FFFFFF;
}

.fa-twitter {
  background: #5C8E3A;
  color: #FFFFFF;
}



</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTtuFUKivs_nsQQEhoMS3BmfZJ73fh59w&libraries=places"></script>
</head>

<body background="images/forest.jpg">
<div style="max-width: 1200px; margin:0 auto; padding: 10px;">
	
	<div id="wrapper" style="background-color: #FFFFFF" class="container-fluid">

<div class="row" >
	

	
<div class="jumbotron jumbak" class="col-lg-6  col-lg-offset-6 col-md-6 col-sm-8 col-xs-8">
	
<div id="logo" class="hidden-xs hidden-sm hidden-md col-lg-1 col-lg-offset-1col-md-1 col-sm-1 col-xs-1">
  <img src="images/kestrel.jpg" alt="kestrel" height="150" width="150">
</div>
	
<div id="logo_medium" class="hidden-lg hidden-xs hidden-sm  col-md-1">
  <img src="images/kestrel.jpg" alt="kestrel" height="135" width="135">
</div>
	
<div id="logo_small" class="hidden-lg hidden-md  col-sm-1 hidden-xs">
  <img src="images/kestrel.jpg" alt="kestrel" height="120" width="120">
</div>
<h1 >Birds Eye View</h1>
<h1 id="uheader">Wild Life * Bird Spotting * Outside Activities</h1>


	
</div>	
	


</div>
		

		
		<div class="row " style="margin-top: 20px;" >
		
		<nav class="navbar my-nav navbar-expand-lg"  >
  
    <div class ="container-fluid">
	

	
	<button class ="navbar-toggle my_btn  btn-block" data-toggle = "collapse" data-target = ".CollapseNav">
	
	<span style="color:#FFFFFF" class ="icon-bar my_toggle"></span>
	<span class ="icon-bar my_toggle"></span>
	<span class ="icon-bar my_toggle"></span>
	<span class ="icon-bar my_toggle"></span>
		 Click for Menu
		
	</button>
	
	<div class ="collapse navbar-collapse CollapseNav">
		 
    <ul class="nav navbar-nav font_style">
		<div id="twit">
  <a href="https://twitter.com/" target="_blank" class="fa fa-twitter social hidden-xs hidden-sm"></a>
</div>	
        <li><a class="font_style" href="index.php">Home</a></li>
        <li class="font_style"><a class=" font_style" href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=birdfeeder" <?php if($_GET['p'] == 'birdfeeder'){ ?>class="active location"<?php } ?>>Bird Feeders </a></li>
        <li><a class=" font_style" href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=portfolio" <?php if($_GET['p'] == 'portfolio'){ ?>class="active location"<?php } ?>>Portfolio </a></li>
        <li><a class=" font_style" href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=spotted" <?php if($_GET['p'] == 'spotted'){ ?>class="active location"<?php } ?>>Spotted</a></li>
        <li><a class=" font_style" href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=contact" <?php if($_GET['p'] == 'contact'){ ?>class="active location"<?php } ?>>Contact</a></li>
            <?php if($_SESSION['loggedin']){ ?>
                <li><a class="font_style" href="index.php?p=logout">Logout</a></li>
            <?php }else{ ?>
                <li><a class="font_style" href="index.php?p=login">Login</a></li>
                <li><a class="font_style" href="index.php?p=register">Register</a></li>
            <?php } ?>
	  
	<div id="face">
  <a href="https://en-gb.facebook.com/" target="_blank" class="fa fa-facebook social hidden-xs hidden-sm"></a>
</div>	
    </ul>
		</div>
		</div>
</nav>
</div>	
<div id="colorbk">		
<a href="https://twitter.com/BirdsEyeView52?ref_src=twsrc%5Etfw" class="twitter-follow-button tfollow twittbtn"data-size="large" data-show-count="true">Follow @BirdsEyeView52</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>