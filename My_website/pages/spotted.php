<div class="row">
    <div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
		<h1>Spotted-Bird Spotting</h1>
    </div><!---end of pagetitle-->
	<div id="col-lg-1">
	<a href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=post" class="btn btn-primary btn-success btn-lg active hidden-sm hidden-xs" role="button" aria-pressed="true">Add post</a>
	</div>
</div><!---end of row-->

<div style="margin-top:20px;"></div>

<?php

	if(isset($_POST['post_id'])){//delete function
		//No errors - delete 
		$query = "DELETE FROM posts WHERE post_id = :post_id";
		$result = $DBH->prepare($query);
		$result->bindParam(':post_id', $_POST['post_id']);
		$result->execute();
	}
	
	$query = "SELECT * FROM posts ORDER BY date DESC ";//data is displayed in decending order by date
	$result = $DBH->prepare($query);
	$result->execute();
	
	while($row = $result->fetch(PDO::FETCH_ASSOC)){ //fetch results
	
	?>
		<div class="row" style="margin-top: 20px;">
			<div id="img_div">
				<img class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1 img-responsive blogpic" src="./<?php echo $row['post_image']; ?>" >
				<p id="posttext" class="posttext col-lg-6 col-md-5 col-sm-5 col-xs-5 "><?php echo $row['post_text']; ?></p>
			</div>
	<?php if($row['user_id'] == $_SESSION['userData']['user_id']){ ?><!--user_id is used for session-->
			<div class="col-lg-1">
			<form action="" method="post">
				<input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>"/><!--only show for user who created by user_id-->
				<input type="submit" value="Delete" name="delete" id="delete" class="btn btn-danger">
				<a href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=editpost&id=<?php echo $row['post_id']; ?>">Edit post</a>
			</form>
			</div>
	<?php } ?>
		</div>
		<div class='row' style='margin-top: 5px;'>
			<div id='breaker1' class='col-lg-10 col-lg-offset-1' style='background-color:#5C8E3A;'>
		</div>
		</div>
	<?php
	
	}
?>