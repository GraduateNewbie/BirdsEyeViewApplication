<?php
  // prevent unauthorised user access without login
	 if(!$_SESSION['loggedin']){
		//User is not logged in
		 echo "<h1>Access Denied</h1>";
		 echo "<script> window.location.assign('index.php?p=login'); </script>";
		 exit;
	 }
?>

<?php

if($_POST['upload']){
    if($_POST['post_text']){
        if($_FILES['image']['size'] > 0){
            $image = $_FILES['image']['name'];
            $target = "post_images/".rand(1000000000, 999999999999999).basename($image);//attach string of numbers to start of file name
            $date = date("Y-m-d H:i:s");
			
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $query = "INSERT INTO posts (user_id, post_text, post_image, date) VALUES (:user_id, :post_text, :post_image, :date)";
                $result = $DBH->prepare($query);
                $result->bindParam(':user_id', $_SESSION['userData']['user_id']);
                $result->bindParam(':post_text', $_POST['post_text']);
                $result->bindParam(':post_image', $target);
				$result->bindParam(':date', $date);
				
                
                $result->execute();
                
                $success = true;
            }else{
                $error = "Failed to upload image";
            }
        }else{
            $query = "INSERT INTO posts (post_text, user_id, date) VALUES (:post_text, :user_id,:date)";
            $result = $DBH->prepare($query);
            $result->bindParam(':user_id', $_SESSION['userData']['user_id']);
            $result->bindParam(':post_text', $_POST['post_text']);  
			$date = date("Y-m-d H:i:s");
            $result->execute();
            $success = true;//upload data
        }
    }else{
        $error = "Post text blank.";
    }
}

?>

<div id="postwrapper">
		
 
    
    <?php
    
    if(!$success){
    
    ?>
	<div class="row">	
	<h1 id="title">Upload your Bird spotting finds<br>We Can't wait to hear from you!</h1>
	</div><!--end of row -->
	
	<div class="row" >
	
<div id="breaker2" class='col-lg-10 col-lg-offset-1' style='background-color:#5C8E3A;'>
	</div><!--end of breaker2 --> 
</div><!--end of row --> 
	
    <?php
        
        if($error){
            echo '<div class="alert alert-danger">'.$error.'</div>';
        }    
    ?>

	<div class="row" style="margin-top:20px;">

	<div id="formDiv" class="col-lg-6 col-lg-offset-3"><!--postform-->
		
  <form method="POST" action="index.php?p=post" enctype="multipart/form-data">
	  <div class="form-group col-lg-6 col-lg-offset-3">
   <label for="textinputarea">Upload your picture</label>
  	<input type="hidden" name="size" value="1000000">
	  </div>
  	<div class="form-group">
       <input type="file" name="image" class="choosebtn">
	</div>
 <div class="form-group">
   <label for="textinputarea">Tell us about your picture</label>
      	<textarea class="form-control" name="post_text" class="text" cols="40" row="8" placeholder="Type in discription of picture i.e when where and what...."></textarea>
  	</div>
  	<div>
  		<input class=" btn btn-lg btn-success" type="submit" name="upload" value="Upload Review">
  	</div>
  </form>
</div>
 <!--end of postform -->
</div>  <!--end of row -->  

<div class="row" style="margin-top:40px; margin-bottom:100px;" >
	
<div id="breaker2" class='col-lg-10 col-lg-offset-1' style='background-color:#5C8E3A;'>
	</div><!--end of breaker2 --> 
</div><!--end of row --> 

    <?php
        
    }else{
        
    ?>
    
    <div class="alert alert-success"><h7>Your post has been added!</h7></div><!--success message-->
    
    <?php } ?>
        
		

	
		
	</div><!--end of wrapper-->