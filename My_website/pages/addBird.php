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

if($_POST){
  if(!$_POST['bird_name']||!$_POST['bird_type_id']||!$_POST['title']||!$_POST['definition']){
    $error = "Please complete all information";
  }else{
	
	   if($_FILES['image']['size'] > 0){
            $image = $_FILES['image']['name'];
            $target = "birdphotos/".rand(1000000000, 999999999999999).basename($image);
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
              //NO ERRORS - let's create the account

              //INSERT DB
              $query = "INSERT INTO birds (bird_name, bird_type_id, bird_photo, title, definition) VALUES (:bird_name, :bird_type_id, :bird_photo, :title, :definition)";
              $result = $DBH->prepare($query);
              $result->bindParam(':bird_name', $_POST['bird_name']);
              $result->bindParam(':bird_type_id', $_POST['bird_type_id']);
              $result->bindParam(':bird_photo', $target);
              $result->bindParam(':title', $_POST['title']);
              $result->bindParam(':definition', $_POST['definition']);
              $result->execute();
                $success = true;
            }else{
                $error = "Failed to upload image";
            }
        }else{
            $error = "Please upload a photo.";
        }
    }
}
?>
<div class="row">
<div class="container col-lg-6 col-lg-offset-3">
  <h1>Upload Bird Info</h1>
  <form action="index.php?p=test" method="post" enctype="multipart/form-data">
    <?php if($error){
      echo '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      '.$error.'
      </div>';
    }else if($success){
        echo '<div id="h7" class="alert alert-success"><h7>Bird Upload complete</h7></div>';//if success give message
    }
      
      
    ?>
    <div class="form-group">
      <label for="text">Bird Name</label>
      <input type="text" class="form-control" id="bird_name" name="bird_name" placeholder="bird_name" autofocus>
    </div>
    <div class="form-group">
      <label for="bird_type_id">Bird Type</label>
        
        <select name="bird_type_id" class="form-control"> <!--select id-->      
         <?php
        	$query = "SELECT * FROM bird_types";
              $pdo = $DBH->prepare($query);
                $pdo->execute();

                while($row = $pdo->fetch(PDO::FETCH_ASSOC)) {
                    echo '<option value="'.$row['bird_type_id'].'">'.$row['bird_type_name'].'</option>';//data to be sent
              }
          ?>
        </select>
    </div>
    <div class="form-group"><!--form to upload bird info--> 
      <label for="text">Choose Image</label>
      <input type="file" name="image" class="choosebtn">
    </div>

    <div class="form-group">
      <label for="text">Add Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
	  
	<div class="form-group">
      <label for="text">Definition</label>
      <textarea class="form-control" name="definition" class="definition" cols="40" row="8" placeholder="Type in discription of bird"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Upload Bird</button>
  </form>
</div>
</div>

