<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h2>View Bird</h2>
    </div><!---end of pagetitle-->
</div><!---end of row-->

<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<a href="index.php?p=birdtypes"><h3>Back to Bird Types</h3></a>
    </div><!---end of pagetitle-->


<?php
  $birdid = $_GET["id"];
        $query = "SELECT * FROM birds WHERE bird_id = :birdid";//select  bird where bird_id matches :birdid
      $pdo = $DBH->prepare($query);
$pdo->bindParam(':birdid', $birdid);
        $pdo->execute();

        $bird = $pdo->fetch(PDO::FETCH_ASSOC);//fetch data for bird where bird_id matches :birdid
  ?>

<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h2><?php echo $bird['bird_name']; ?></h2><!--post bird name-->
	</div>
	</div><!--end of row-->
	
<div class="row">
<div >
    
    <img class="birdviewimage col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1 img-responsive" src="./<?php echo $bird['bird_photo']; ?>"/><!--post bird image-->
	</div>
	</div><!---end of row-->	
	
<div class="row" style="margin-top:10px; margin-bottom:20px;">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1">
    

    
    <p><?php echo $bird['definition']; ?></p><!--post bird definition-->
	</div>
	</div><!--end of row-->	
	

<!--https://en.wikipedia.org/wiki/List_of_birds_of_Great_Britain-->