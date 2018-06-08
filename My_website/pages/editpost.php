<?php
  // prevent unauthorised user access without login
	if(!$_SESSION['loggedin']){
		//User is not logged in
		echo "<h1>Access Denied</h1>";
		echo "<script> window.location.assign('index.php?p=login'); </script>";
		exit;
	}
?>

<div class="container card mt-5">
     <div class=”card-body”>
	<h1>Edit your spotted post</h1>
	<p>Complete the form below to edit your spotted posts</p>

  <?php

    		if(isset($_POST['submit'])){

            if($_FILES['post_images']["name"]){
            //Let's add a random string of numbers to the start of the filename to make it unique!

            $newFilename = md5(uniqid(rand(), true)).$_FILES["post_images"]["name"];
            $target_file = "post_images/" . basename($newFilename);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            // Check if image file is a actual image or fake image
              $check = getimagesize($_FILES["post_images"]["tmp_name"]);
              if($check === false) {
                  echo "File is not an image!";
                  $uploadError = true;
              }

              //Check file already exists - It really, really shouldn't!
            if (file_exists($target_file)) {
              echo "Sorry, file already exists.";
              $uploadError = true;
            }

            // Check file size
            if ($_FILES["post_images"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadError = true;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadError = true;
            }

            // Did we hit an error?
            if ($uploadError) {
                echo "Sorry, your file was not uploaded.";
            } else {
              //Save file
                if (move_uploaded_file($_FILES["post_images"]["tmp_name"], $target_file)) {
                    //Success!
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
          }

          if($target_file){
              				$query = "UPDATE posts SET post_image = :post_image, post_text = :post_text WHERE post_id = :post_id";//update spotted records
              			}else{
              				$query = "UPDATE posts SET post_text = :post_text WHERE post_id = :post_id";
              			}
              		    $result = $DBH->prepare($query);
 
              		    $result->bindParam(':post_text', $_POST['post_text']);
              		    if($target_file){
              				$result->bindParam(':post_image', $target_file);
              			}
              		    $result->bindParam(':post_id', $_GET['id']);
              		    if($result->execute()){
              		    	echo '<div class="alert alert-success" role="alert">Your spotted post has been updated!</div>';
              		  }
    		}

    		//Get current values
    		$query = "SELECT * FROM posts WHERE post_id = :post_id";
    	    $result = $DBH->prepare($query);
    	    $result->bindParam(':post_id', $_GET['id']);
    	    $result->execute();

    	    $data = $result->fetch(PDO::FETCH_ASSOC);

    	?>

    	<form method="post" action="" enctype="multipart/form-data">

    		<div class="form-group">
    			<label for="post_images">Spotted Photo</label>
    			<input type="file" name="post_images" id="post_images">
    			<p class="help-block">Upload a photo  for your spotted blog.</p>
    		</div>
    		<div class="form-group">
    			<label for="post_text">Post text</label>
    			<input type="text" class="form-control" id="post_text" name="post_text" value="<?php echo $data['post_text']; ?>">
    		</div>
    		
    		<button type="submit" name="submit" class="btn btn-success">Update Post</button>
    	</form>

      </div>
</div>