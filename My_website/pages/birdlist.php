<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h2>Bird List</h2>
    </div><!---end of pagetitle-->
	
<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<a href="index.php?p=birdtypes"><h3>Back to Bird Types</h3></a>
    </div><!---end of pagetitle-->
	
</div><!---end of row-->

<ul id="birdList">
    <?php
      $type_id = $_GET["id"];
        	$query = "SELECT * FROM birds WHERE bird_type_id = :typeid";//select data from birds table where bird_type_id matches typeid
          $pdo = $DBH->prepare($query);
        	$pdo->bindParam(':typeid', $type_id);
        	$pdo->execute();

        	while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {//fetch data from birds table
				echo "<div class='row'>";
				echo "<div class='col-lg-4 col-md-4 col-sm-4 col-lg-offset-4' style='margin-top: 20px;'>";
				echo "<div class='row'>";
				echo "<div class='col-lg-8 col-md-8 col-sm-8 col-lg-offset-3'>";
        		echo '<li data-id="'.$row['bird_id'].'"><a href="index.php?p=viewbird&id='.$row['bird_id'].'">'.$row['bird_name'].'<a/></li>';
				echo "</div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";//post bird information based on initial id/link clicked
          }
      ?>
  </ul>
<div class="row"></div>
</div>