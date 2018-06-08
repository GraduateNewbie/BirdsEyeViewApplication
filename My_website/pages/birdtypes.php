<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h2>Bird Types</h2>
    </div><!---end of pagetitle-->
</div><!---end of row-->





<div class="row">
<ul id="birdList">
    <?php
        	$query = "SELECT * FROM bird_types";//select all data from bird types
          $pdo = $DBH->prepare($query);
        	$pdo->execute();

        	while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
				echo "<div class='col-lg-2 col-md-2 col-sm-2' style='margin-top: 20px;'>";
        		echo '<li data-id="'.$row['bird_type_id'].'"><a href="index.php?p=birdlist&id='.$row['bird_type_id'].'">'.$row['bird_type_name'].'<a/></li>';
				echo "</div>";//post all bird types categories to screen
          }
      ?>
  </ul>
</div>
<div class="row"></div>
